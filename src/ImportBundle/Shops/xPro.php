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

    public function getToken($link)
    {
        $lastSlashIndex = strripos($link, "/");
        $lastDotIndex = strripos($link, ".");

        $token = substr($link, $lastSlashIndex + 1, $lastDotIndex - $lastSlashIndex - 1);

        return $token;
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