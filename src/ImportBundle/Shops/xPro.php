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

    public function getCategoryName($shopLink)
    {
        return $this->getCategoryTitle($this->template->CrawlerShortener($shopLink));
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

    public function mapCategoryName($categoryName)
    {
        switch($categoryName)
        {
            case "JĖGOS AITVARAI":
                return 1;
                break;
            case "BURLENTĖS":
                return 2;
                break;
            case "NARDYMAS":
                return 3;
                break;
            case "IRKLALENTĖS":
                return 4;
                break;
            case "HIDROKOSTIUMAI":
                return 5;
                break;
            case "RIEDLENTĖS":
                return 6;
                break;
            case "SNIEGLENTĖS":
                return 7;
                break;
        }
    }

    protected function getCategoryTitle( Crawler $crawler ) {
        $title = $crawler->filter( '.breadcrumb' )->text();
        $title = trim($title);
        $categoryName = explode(">", $title);
        return trim($categoryName[1]);
    }

    protected function getCategoriesLinks( Crawler $crawler ) {
        $links = $crawler->filter( 'div#block_top_menu > ul > li:not(:last-child) > a' )->each( function ( Crawler $node, $i ) {
            return $node->link()->getUri();
        });
        return array_values( $links );
    }

    protected function getCategoryProducts( Crawler $crawler ) {
        $links = $crawler->filter( '.product_img_link' )->each( function ( Crawler $node, $i ) {
            return $node->link()->getUri();
        });

        return array_values( $links );
    }

    protected function getPagesCount( Crawler $crawler ) {
        $pagesCount = $crawler->filter( 'div#pagination_bottom ul.pagination li:nth-last-child(2) a span' );
        if ($pagesCount->count() > 0) {
            return $pagesCount->text();
        } else {
            return 1;
        }
    }

}