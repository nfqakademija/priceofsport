<?php
namespace ImportBundle\Services;

use ImportBundle\Entity\PriceHistory;
use ImportBundle\Entity\Product;

class DataImporter {

    protected $data;

    /**
     * DataImporter constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @param $shop_id
     * @param $page_link_id
     * @param $title
     * @param $price
     * @param $description
     * @param $image
     * @internal param $category_id
     * @return bool
     */
    public function insertProduct($shop_id, $page_link_id, $title, $price, $description, $image)
    {
        $product = new Product();
        $product->setShopId($shop_id);
        $product->setProductPageLinkId($page_link_id);
        $product->setTitle($title);
        $product->setPrice($price);
        $product->setDescription($description);
        $product->setImage($image);
        $product->setDateAdded(date("Y-m-d H:i:s"));
        $this->data->persist($product);
        $this->data->flush();
        return $product;
    }

    /**
     * @param $product_id
     * @param $price
     */
    public function insertProductPrice($product_id, $price)
    {
        $priceHistory = new PriceHistory();

        $priceHistory->setProductId($product_id);
        $priceHistory->setPrice($price);
        $priceHistory->setDateAdded(date("Y-m-d"));

        $this->data->persist($priceHistory);
        $this->data->flush();
    }





}