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
            case "Vandenlentės":
                return 0;
                break;
            case "Kaitai":
                return 0;
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
        $links = $crawler->filter('div#menu_oc > ul > li > a')->each(function (Crawler $node) {
            return $node->link()->getUri();
        });

        return array_values($links);
    }

    protected function getCategoryTitle(Crawler $crawler)
    {
        $title = $crawler->filter('ul.breadcrumbs > li:nth-child(2)')->text();

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
        return toFloat($price);
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
    protected function toFloat($num) {
        $dotPos = strrpos($num, '.');
        $commaPos = strrpos($num, ',');
        $sep = (($dotPos > $commaPos) && $dotPos) ? $dotPos :
            ((($commaPos > $dotPos) && $commaPos) ? $commaPos : false);

        if (!$sep) {
            return floatval(preg_replace("/[^0-9]/", "", $num));
        }

        return floatval(
            preg_replace("/[^0-9]/", "", substr($num, 0, $sep)) . '.' .
            preg_replace("/[^0-9]/", "", substr($num, $sep+1, strlen($num)))
        );
    }
}
