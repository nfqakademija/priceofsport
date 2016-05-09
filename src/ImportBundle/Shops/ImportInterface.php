<?php

namespace ImportBundle\Shops;

interface ImportInterface
{
    public function getCategories($shopLink);
    public function getCategoryName($shopLink);
    public function getLinks($categoryLink);
    public function getPages($categoryLink);
    public function getPaginationPrefix($shopId, $page);
    public function mapCategoryName($categoryName);

    public function getImage($pageLink);
    public function getDescription($pageLink);
    public function getPrice($pageLink);
    public function getTitle($pageLink);
    public function getToken($pageLink);
    public function getCurrency($pageLink);
}
