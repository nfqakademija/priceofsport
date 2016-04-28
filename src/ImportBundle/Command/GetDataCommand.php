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

    /*
     * Fetching data from pages command
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $id = $input->getArgument('id');

        $getPageData = $this->getContainer()->get('import.link.getter');
        $getShopInfo = $this->getContainer()->get('import.link.parser');
        $insertProductData = $this->getContainer()->get('import.product.data');
        $product = $this->getContainer()->get('product.customer_repository');
        $checker = new Checker\GetPageContent();

        $shopData = $getPageData->getShopData($id);
        $shopName = $getShopInfo->getShopInfo($id)->getShopName();

        $controller = "ImportBundle\\Shops\\".$shopName;

        $getter = new $controller();
        $count = 0;
        foreach ($shopData as $item) {
            $count++;
            echo "\nImporting ".$count." product...\n";
            $link = $checker->getProperUrl($item->getPageLink());

            if ($link != null) {
                $existingProduct = $product->find($item->getId());
                
                if ($existingProduct) {
                    $output->writeln("Failed to insert product! This product already exsists.\nID: ".$item->getId());
                    $price = $getter->getPrice($link);
                    echo "\nBut price will be saved to the history...";
                    $insertProductData->insertProductPrice($existingProduct, $price);
                    continue;
                }
                $img = $getter->getImage($link);
                $desc = $getter->getDescription($link);
                $price = $getter->getPrice($link);
                $title = $getter->getTitle($link);
                $insertedProduct = $insertProductData->insertProduct($id, $item, $title, $price, $desc, $img);
                $output->writeln(
                    "Title: " . $title . "\nPrice: " . $price . "\nDescription: " . $desc . "\nImage URL: "
                    . $img . "\n ********************"
                );
                $insertProductData->insertProductPrice($insertedProduct, $price);

            }
        }
    }
}