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
        $links = $crawler->filter( 'div#menu > ul > li > div > ul > li > a' )->each( function ( Crawler $node, $i ) {
            var_dump($node->link()->getUri());
            return $node->link()->getUri();
        });

        return array_values( $links );
    }

    protected function getCategoryProducts( Crawler $crawler ) {

    }

    protected function getPagesCount( Crawler $crawler ) {
        $pages = $crawler->filter( 'div.pagination div.results' )->text();
        $result = explode("(", $pages);

        return str_replace("  puslapių (-io)", "", $result[1]);
    }

}