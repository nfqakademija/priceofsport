<?php
namespace ImportBundle\Command;

use ImportBundle\Checker\DateChecker;
use ImportBundle\Checker\UrlChecker;
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
        $priceHistory = $this->getContainer()->get('price_history.customer_repository');
        
        $checker = new UrlChecker();

        $shopData = $getPageData->getShopData($id);
        $shopName = $getShopInfo->getShopInfo($id)->getShopName();

        $controller = "ImportBundle\\Shops\\".$shopName;

        $getter = new $controller();
        $count = 0;

        $em = $this->getContainer()->get('doctrine')->getManager();

        foreach ($shopData as $item) {
            $count++;
            echo "\nImporting ".$count." product...\n";
            $link = $checker->getProperUrl($item->getPageLink());

            if ($link != null) {
                $existingProduct = $product->findOneBy(['product_page_link_id' => $item]);

                if ($existingProduct) {
                    $output->writeln("\nFailed to insert product! This product already exsists.\nID: ".$item->getId());
                    $price = $getter->getPrice($link);
                    $priceDate = $priceHistory->findOneBy(['productId' => $existingProduct, 'dateAdded' => date("Y-m-d")]);
                    $storedToken = $existingProduct->getToken();

                    if (!$priceDate) {
                        $insertProductData->insertProductPrice($existingProduct, $price);
                        echo "\nProduct price was added to the history!";
                    }

                    if ($storedToken == null) {
                        $token = $getter->getToken($link);
                        $existingProduct->setToken($token);

                        $em->persist($existingProduct);
                        $em->flush();
                    }
                    continue;
                }
                $img = $getter->getImage($link);
                $desc = $getter->getDescription($link);
                $price = $getter->getPrice($link);
                $title = $getter->getTitle($link);
                $token = $getter->getToken($link);
                $insertedProduct = $insertProductData->insertProduct($id, $item, $title, $price, $desc, $img, $token);
                $output->writeln(
                    "Title: " . $title . "\nPrice: " . $price . "\nDescription: " . $desc . "\nImage URL: "
                    . $img . "\n ******************** \n"
                );
                $insertProductData->insertProductPrice($insertedProduct, $price);

            }
        }



    }
}