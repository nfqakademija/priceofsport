<?php

namespace ImportBundle\Shops;

interface ImportInterface
{
    public function getCategories($shopLink);
    public function getPages($categoryLink);
    public function getLinks($categoryLink);
}