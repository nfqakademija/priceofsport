<?php

namespace ImportBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use GuzzleHttp;
use Symfony\Component\DomCrawler\Crawler;

class GetLinksCommand extends ContainerAwareCommand
{

    protected function configure()
    {
        $this
            ->setName('get:links')
            ->addArgument(
                'id',
                InputArgument::REQUIRED,
                'ID of some page'
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $id = $input->getArgument('id');

        $service = $this->getContainer()->get('import.link.parser');
        $service2 = $this->getContainer()->get('import.product.link');

        $shopLink = $service->start($id);

        $client = new GuzzleHttp\Client();
        $response = $client->request('GET', $shopLink);
        $crawler = new Crawler($response->getBody()->getContents(), 'http');
        $categoriesLinks = $this->getCategoriesLinks($crawler);
        foreach($categoriesLinks as $item) {
            $response = $client->request('GET', $item);
            $crawler = new Crawler($response->getBody()->getContents(), 'http');
            $pagination = $this->getPagesCount($crawler);
            for ($i = 1; $i <= $pagination; $i++) {
                $response = $client->request('GET', $item . '/?page=' . $i);
                $crawler = new Crawler($response->getBody()->getContents(), 'http');
                $products = $this->getCategoryProducts($crawler);
                foreach ($products as $item) {
                    $message = $service2->insertShopProductsLinks($id, $item);
                    $output->writeln($message);
                }
            }
        }

    }

    protected function getCategoriesLinks( Crawler $crawler ) {

        //$links = $crawler->filter( 'div#menu_oc ul li a' )->each( function ( Crawler $node, $i ) {
        $links = $crawler->filter( 'div#menu_oc > ul > li > a' )->each( function ( Crawler $node, $i ) {
            return $node->link()->getUri();
        });

        return array_values( $links );
    }

    protected function getCategoryProducts( Crawler $crawler ) {

        $links = $crawler->filter( '#content div.image > a' )->each( function ( Crawler $node, $i ) {
            return $node->link()->getUri();
        });

        return array_values( $links );
    }

    protected function getPagesCount( Crawler $crawler ) {
        $pages = $crawler->filter( 'div.pagination div.results' )->text();
        $result = explode("(", $pages);
        return str_replace(" Pages)", "", $result[1]);
    }

}