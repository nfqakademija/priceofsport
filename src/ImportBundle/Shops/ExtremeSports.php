<?php

namespace ImportBundle\Shops;

use Symfony\Component\DomCrawler\Crawler;

class ExtremeSports implements ImportInterface
{
    public function __construct()
    {
        $this->template = new Template();
    }

    public function getCategories($shopLink)
    {
        return $this->getCategoriesLinks($this->template->CrawlerShortener($shopLink));
    }

    public function getLinks($categoryLink)
    {
        return $this->getCategoryProducts($this->template->CrawlerShortener($categoryLink));
    }

    public function getPages($categoryLink)
    {
        return $this->getPagesCount($this->template->CrawlerShortener($categoryLink));
    }

    public function getPaginationPrefix($shopId, $page)
    {
        return $this->template->getPaginationPrefix($shopId, $page);
    }

    protected function getCategoriesLinks( Crawler $crawler ) {

    }

    protected function getCategoryProducts( Crawler $crawler ) {

    }

    protected function getPagesCount( Crawler $crawler ) {

    }

}