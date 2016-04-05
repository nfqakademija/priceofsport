<?php
namespace ImportBundle\Services;


use ImportBundle\Entity\Product;

class DataImporter {

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @param $shop_id
     * @param $category_id
     * @param $title
     * @param $price
     * @param $description
     * @param $image
     */
    public function insertProduct($shop_id, $category_id, $title, $price, $description, $image) {
        $product = new Product();
        $product->setShopId($shop_id);
        $product->setTitle($title);
        $product->setCategoryId($category_id);
        $product->setPrice($price);
        $product->setDescription($description);
        $product->setImage($image);
        $product->setDateTime(date("Y-m-d H:i:s"));
        $this->data->persist($product);
        $this->data->flush();
    }




}