<?php
namespace ImportBundle\Services;

use ImportBundle\Entity\ProductPageLink;

class LinkImporter
{
    protected $link;

    public function __construct($data)
    {

        $this->link = $data;

    }

    /**
     * @param $shopId
     * @param $productLink
     * @return string
     */
    public function insertProductLink($shopId, $productLink) {

        $product = new ProductPageLink();
        $product->setShopId($shopId);
        $product->setPageLink($productLink);

        $this->link->persist($product);
        $this->link->flush();

        return $productLink." inserted!";

    }

}