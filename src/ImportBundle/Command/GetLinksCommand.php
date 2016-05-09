<?php

namespace ImportBundle\Command;

use ImportBundle\Shops\PaginationPrefix;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

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

        $shopId = $input->getArgument('id');

        $getShopInfo = $this->getContainer()->get('import.link.parser');
        $insertShopInfo = $this->getContainer()->get('import.product.link');
        
        $shopLink = $getShopInfo->getShopInfo($shopId)->getShopLink();
        $shopName = $getShopInfo->getShopInfo($shopId)->getShopName();

        $controller = "ImportBundle\\Shops\\".$shopName;
        $getter = new $controller();

        foreach ($getter->getCategories($shopLink) as $link) {
            $pages = $getter->getPages($link);
            for ($i = 1; $i <= $pages; $i++) {
                $productsLinks = $getter->getLinks($link . $getter->getPaginationPrefix($shopId, $i));
                foreach ($productsLinks as $productLink) {
                    $categoryName = $getter->getCategoryName($productLink);
                    //$message = $categoryName." ".$getter->mapCategoryName($categoryName)." ".
                    //$insertShopInfo->insertProductLink(
                    //$shopId,
                    // $productLink,
                    // $getter->mapCategoryName($categoryName)
                    //);
                    $message = $categoryName." ".$getter->mapCategoryName($categoryName);
                    $output->writeln($message);
                }
            }
        }

    }
}
