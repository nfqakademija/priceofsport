<?php

namespace ImportBundle\Shops;

use Symfony\Component\DomCrawler\Crawler;

class xPro implements ImportInterface
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

    protected function getCategoriesLinks( Crawler $crawler )
    {
        $links = $crawler->filter( 'div#block_top_menu > ul > li:not(:last-child) > a' )->each( function ( Crawler $node, $i ) {
            return $node->link()->getUri();
        });

        return array_values( $links );
    }

    protected function getCategoryProducts( Crawler $crawler )
    {
        $links = $crawler->filter( '.product_img_link' )->each( function ( Crawler $node, $i ) {
            return $node->link()->getUri();
        });

        return array_values( $links );
    }

    protected function getPagesCount( Crawler $crawler )
    {
        $pagesCount = $crawler->filter( 'div#pagination_bottom ul.pagination li:nth-last-child(2) a span' );
        if ($pagesCount->count() > 0) {
            return $pagesCount->text();
        } else {
            return 1;
        }
    }
    protected function getImageUrl(Crawler $crawler)
    {

        $links = $crawler->filter( '#page div #image-block a' )->each( function ( Crawler $node, $i ) {
            return $node->link()->getUri();
        });

        return $links[0];
    }

    protected function getDescriptionText( Crawler $crawler )
    {
        $text = $crawler->filter( 'section.page-product-box > div.rte' )->text();
        return trim($text);
    }
    protected function getProductPrice( Crawler $crawler )
    {
        $price = $crawler->filter(' #page div.price #our_price_display ')->text();
        return trim($price);
    }

    protected function getProductTitle( Crawler $crawler )
    {
        $title = $crawler->filter( '#page h1' )->text();
        return $title;
    }

}