<?php
namespace ImportBundle\Services;

class LinkGetter
{

    protected $product_page_link;

    public function __construct($data)
    {
        $this->product_page_link = $data;
    }

    public function getShopData($shopId)
    {
        $shopData = $this->product_page_link->findAll();
        if (!$shopData) {
            throw new \Exception(
                'No shop found for id '.$shopId
            );
        }

        return $shopData;
    }

}