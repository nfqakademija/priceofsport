<?php

namespace ImportBundle\Shops;

use Symfony\Component\DomCrawler\Crawler;

class SurfHouse implements ImportInterface
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
        switch ($categoryName) {
            // Kiteboarding
            case "KITES":
                return 50;
                break;
            case "BOARDS":
                return 51;
                break;
            case "KITEBOARDING HARNESSES":
                return 54;
                break;
            case "KITEBOARDING BAGS":
                return 53;
                break;
            case "WETSUITS":
                return 52;
                break;
            case "CLOTHES":
                return 52;
                break;
            case "ACCESSORIES":
                return 54;
                break;

            // Windsurfing
            case "WINDSURFING BOARDS":
                return 13;
                break;
            case "SAILS":
                return 14;
                break;
            case "BOOMS":
                return 16;
                break;
            case "MASTS":
                return 15;
                break;
            case "WINDSURFING HARNESSES":
                return 18;
                break;
            case "EXTENSIONS":
                return 17;
                break;
            case "WETSUITS":
                return 41;
                break;
            case "ACCESSORIES":
                return 21;
                break;
            case "CLOTHES":
                return 46;
                break;
            // Sup
            case "SUP BOARDS":
                return 63;
                break;
            case "PADDLES":
                return 67;
                break;
            case "WETSUITS":
                return 66;
                break;
            case "ACCESSORIES":
                return 65;
                break;
            case "CLOTHES":
                return 64;
                break;
            // Snowboarding
            case "SNOWBOARDS":
                return 23;
                break;
            case "BOOTS":
                return 25;
                break;
            case "GOGGLES & LENSES":
                return 28;
                break;
            case "PROTECTION":
                return 26;
                break;
            case "CLOTHING":
                return 61;
                break;
            case "TOOLS & WAX":
                return 30;
                break;
            case "SNOWBOARDING ACCESSORIES":
                return 30;
                break;
            // Longboarding
            case "PROTECTIONS":
                return 55;
                break;
            case "COMPLETES":
                return 60;
                break;
            case "DECKS":
                return 56;
                break;
            case "WHEELS":
                return 56;
                break;
            case "BEARINGS":
                return 56;
                break;
            case "BUSHINGS":
                return 56;
                break;
            case "BOLTS/HARDWARE":
                return 56;
                break;
            case "GLOVES/PUCKS":
                return 56;
                break;
            case "CLOTHES":
                return 59;
                break;
        }
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

        $token = substr($link, $lastSlashIndex + 1, strlen($link) - $lastSlashIndex);

        return $token;
    }

    public function getCurrency($pageLink)
    {
        return $this->getProductCurrency($this->template->CrawlerShortener($pageLink));
    }

    protected function getCategoriesLinks(Crawler $crawler)
    {
        $links = $crawler->filter('div#menu_oc > ul > li > div > ul > li > a')->each(function (Crawler $node) {
            return $node->link()->getUri();
        });

        return array_values($links);
    }

    protected function getCategoryTitle(Crawler $crawler)
    {
        $title = $crawler->filter('ul.breadcrumbs > li:nth-child(3)')->text();

        return $title;
    }

    protected function getCategoryProducts(Crawler $crawler)
    {
        $links = $crawler->filter('#content div.image > a')->each(function (Crawler $node) {
            return $node->link()->getUri();
        });

        return array_values($links);
    }

    protected function getPagesCount(Crawler $crawler)
    {
        $pages = $crawler->filter('div.pagination div.results')->text();
        $result = explode("(", $pages);

        return str_replace(" Pages)", "", $result[1]);
    }

    protected function getImageUrl(Crawler $crawler)
    {

        $links = $crawler->filter('#content div.image > a')->each(function (Crawler $node) {
            return $node->link()->getUri();
        });

        return $links[0];
    }

    protected function getDescriptionText(Crawler $crawler)
    {
        $text = $crawler->filter('div.tab-content')->text();
        return trim($text);
    }
    protected function getProductPrice(Crawler $crawler)
    {
        $price = $crawler->filter(' #content div.price ')->text();
        return trim($price);
    }

    protected function getProductTitle(Crawler $crawler)
    {
        $title = $crawler->filter('#content > h1')->text();
        return $title;
    }

    protected function getProductCurrency(Crawler $crawler)
    {
        $fullPrice = $crawler->filter(' #content div.price ')->text();

        if (stripos($fullPrice, '€') !== false || stripos($fullPrice, 'EUR') !== false) {
            return 1;
        } elseif (stripos($fullPrice, '$') !== false || stripos($fullPrice, 'USD') !== false) {
            return 2;
        }

        return 0;
    }
}
