<?php
namespace ImportBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use ImportBundle\Entity\Product;
use ImportBundle\Entity\ProductCategory;
use ImportBundle\Checker;


class GetDataCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('get:data')
            ->setDescription('Get data from pages')
            ->addArgument(
                'id',
                InputArgument::REQUIRED,
                'ID of some shop'
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $id = $input->getArgument('id');

        $getPageData = $this->getContainer()->get('import.link.getter');
        $getShopInfo = $this->getContainer()->get('import.link.parser');
        $insertProductData = $this->getContainer()->get('import.product.data');
        
        $checker = new Checker\GetPageContent();

        $shopData = $getPageData->getShopData($id);
        $shopName = $getShopInfo->getShopData($id)->getShopName();

        $controller = "ImportBundle\\Shops\\".$shopName;
        $getter = new $controller();

        foreach ($shopData as $item) {
            $link = $item->getPageLink();
            if ($checker->getContent($link) != null) {
                $img = $getter->getImage($link);
                $desc = $getter->getDescription($link);
                $price = $getter->getPrice($link);
                $title = $getter->getTitle($link);
                $insertProductData->insertProduct($id, 0, $title, $price, $desc, $img);

                $output->writeln("Title: ".$title." Price: ".$price." RESULT: ");
            }
        }
    }
}