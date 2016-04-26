<?php
namespace ImportBundle\Services;

use ImportBundle\Entity\ProductPageLink;

class LinkImporter
{
    protected $import;
    protected $check;

    public function __construct($import, $check)
    {
        $this->import = $import;
        $this->check = $check;
    }

    /**
     * @param $shopId
     * @param $productLink
     * @param $categoryId
     * @return string
     */
    public function insertProductLink($shopId, $productLink, $categoryId)
    {
        $product = new ProductPageLink();
        $product->setShopId($shopId);
        $product->setPageLink($productLink);
        $product->setCategoryId($categoryId);

        $exists = $this->check->findBypageLink($productLink);

        if (count($exists) == 0) {
            $this->import->persist($product);
            $this->import->flush();
            $message = "inserted!";
        } else {
            $message = "exists!";
        }

        return $productLink." ".$message;
    }

}