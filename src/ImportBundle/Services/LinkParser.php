<?php
namespace ImportBundle\Services;

class LinkParser
{

    protected $shop;

    public function __construct($data)
    {
        $this->shop = $data;
    }

    public function getShopData($shopId)
    {
        $shopData = $this->shop->find($shopId);
        if (!$shopData) {
            throw new \Exception(
                'No shop found for id '.$shopId
            );
        }

        return $shopData;
    }

}