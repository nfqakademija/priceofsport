<?php

namespace ImportBundle\Shops;

use Symfony\Component\DomCrawler\Crawler;

class BoardSports implements ImportInterface
{

    public function __construct()
    {
        $this->template = new Template();
    }

    public function getCategories($shopLink)
    {
        return $this->getCategoriesLinks($this->template->getPages($shopLink));
    }

    public function getLinks($categoryLink)
    {
        return $this->getCategoryProducts($this->template->getPages($categoryLink));
    }

    public function getPages($categoryLink)
    {
        return $this->getPagesCount($this->template->getPages($categoryLink));
    }

    protected function getCategoriesLinks( Crawler $crawler ) {

    }

    protected function getCategoryProducts( Crawler $crawler ) {

    }

    protected function getPagesCount( Crawler $crawler ) {

    }

}