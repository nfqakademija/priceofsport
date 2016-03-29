<?php
namespace ImportBundle\Services;

class LinkParser
{

    protected $shop;

    public function __construct($test)
    {
        $this->shop = $test;
    }

    public function start($id)
    {
        $shopLink = $this->shop->find($id);
        if (!$shopLink) {
            throw new \Exception(
                'No shop found for id '.$id
            );
        }

        return $shopLink->getShopLink();
    }

}