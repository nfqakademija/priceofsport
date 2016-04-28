<?php

namespace ImportBundle\Shops;

use Symfony\Component\DomCrawler\Crawler;

class BoardSports implements ImportInterface
{

    protected $template;

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

    public function getImage($pageLink)
    {
        return $this->getImageUrl($this->template->CrawlerShortener($pageLink));
    }

    public function getDescription($pageLink)
    {
        return $this->getDescriptionText($this->template->CrawlerShortener($pageLink));
    }

    public function getPrice($pageLink)
    {
        return $this->getProductPrice($this->template->CrawlerShortener($pageLink));
    }

    public function getTitle($pageLink)
    {
        return $this->getProductTitle($this->template->CrawlerShortener($pageLink));
    }

    public function getPaginationPrefix($shopId, $page)
    {
        return $this->template->getPaginationPrefix($shopId, $page);
    }

    protected function getCategoriesLinks( Crawler $crawler )
    {
        $links = $crawler->filter( 'div#menu > ul > li > div > ul > li > a' )->each( function ( Crawler $node ) {
            return $node->link()->getUri();
        });

        return array_values( $links );
    }

    protected function getCategoryProducts( Crawler $crawler )
    {

    }

    protected function getPagesCount( Crawler $crawler )
    {
        $pages = $crawler->filter( 'div.pagination div.results' )->text();
        $result = explode("(", $pages);

        return str_replace("  puslapių (-io)", "", $result[1]);
    }

    protected function getImageUrl(Crawler $crawler)
    {

        $links = $crawler->filter( '#container div.image a' )->each( function ( Crawler $node, $i ) {
            return $node->link()->getUri();
        });

        return $links[0];
    }

    protected function getDescriptionText( Crawler $crawler )
    {
        $text = $crawler->filter( '#container #content > div.description ' )->text();
        return trim($text);
    }
    protected function getProductPrice( Crawler $crawler )
    {
        $price = $crawler->filter(' #container div.product-info div.price ')->text();
        return trim($price);
    }

    protected function getProductTitle( Crawler $crawler )
    {
        $title = $crawler->filter( '#container div.product-info div.description h1' )->text();
        return $title;
    }

}