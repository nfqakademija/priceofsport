<?php
namespace ImportBundle\Services;

use ImportBundle\Entity\ProductPageLink;

class LinkImporter
{
    protected $link;

    public function __construct($test)
    {
        $this->link = $test;
    }

    public function insertShopProductsLinks($shopId, $productLink) {
        $product = new ProductPageLink();
        $product->setShopId($shopId);
        $product->setPageLink($productLink);

        $this->link->persist($product);
        $this->link->flush();

        return $productLink." inserted!";
    }

}