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
     * @return string
     */
    public function insertProductLink($shop_id, $category_id, $title, $price, $description, $image) {
        $product = new Product();
        $product->setTitle($title);
        $product->setCategoryId($category_id);
        $product->setPrice($price);
        $product->setDescription($description);
        $product->setImage($image);
        $this->data->persist($product);
        $this->data->flush();

        return "The product was successfully submitted to the database";
    }




}