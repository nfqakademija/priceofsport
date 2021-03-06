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

    public function getToken($pageLink)
    {

    }

    public function getCurrency($pageLink)
    {
        return $this->getProductCurrency($this->template->CrawlerShortener($pageLink));
    }

    public function getPaginationPrefix($shopId, $page)
    {
        return $this->template->getPaginationPrefix($shopId, $page);
    }

    public function mapCategoryName($categoryName)
    {
        switch ($categoryName) {
            // Vandenlentes
            case "Krepšiai":
                return 39;
                break;
            case "Liemenės":
                return 19;
                break;
            case "Šalmai":
                return 27;
                break;
            case "Techniniai Rūbai":
                return 41;
                break;
            case "Vandens Batai":
                return 42;
                break;
            case "Vandens Pramogos":
                return 43;
                break;
            case "Vandens Slidės":
                return 44;
                break;
            case "Vandenlentės":
                return 3;
                break;
            case "Apkaustai":
                return 45;
                break;
            case "Hidrokostiumai":
                return 46;
                break;
            case "Aksesuarai":
                return 21;
                break;
            // Kaitai
            case "Apkaustai":
                return 48;
                break;
            case "Šalmai":
                return 49;
                break;
            case "Kaitai":
                return 50;
                break;
            case "Twin Tip lentos":
                return 51;
                break;
            case "Hidro kostiumai":
                return 52;
                break;
            case "Likros":
                return 52;
                break;
            case "Neopreniniai batai":
                return 48;
                break;
            case "Aksesuarai":
                return 54;
                break;
            case "Krepšiai":
                return 53;
                break;
            // Riedlentės
            case "Riedlentės":
                return 60;
                break;
            case "Apsaugos":
                return 55;
                break;
            case "Ašys":
                return 56;
                break;
            case "Lentos":
                return 57;
                break;
            case "Ratukai":
                return 56;
                break;
            case "Aksesuarai":
                return 58;
                break;
            // Surf / sup
            case "Liemenės":
                return 70;
                break;
            case "Šalmai":
                return 69;
                break;
            case "SUP Lentos":
                return 63;
                break;
            case "SURF Lentos":
                return 63;
                break;
            case "Techniniai Rūbai":
                return 64;
                break;
            case "Hidro kostiumai":
                return 66;
                break;
            case "Neopreniniai batai":
                return 68;
                break;
            case "Aksesuarai":
                return 65;
                break;
            // Snieglentes
            case "Snieglentės":
                return 23;
                break;
            case "Apkaustai":
                return 24;
                break;
            case "Batai":
                return 25;
                break;
            case "Apranga":
                return 61;
                break;
            case "Apsaugos":
                return 26;
                break;
            case "Aksesuarai":
                return 30;
                break;
            case "Slidinėjimo akiniai":
                return 30;
                break;
            // Slides
            case "Lazdos":
                return 33;
                break;
            case "Slidės":
                return 32;
                break;
            case "Apkaustai":
                return 34;
                break;
            case "Batai":
                return 35;
                break;
            case "Slidinėjimo apsaugos":
                return 36;
                break;
            case "Apranga":
                return 37;
                break;
            case "Aksesuarai":
                return 38;
                break;
            case "Krepšiai":
                return 39;
                break;
            case "Slidinėjimo akiniai":
                return 40;
                break;
        }
    }

    protected function getCategoriesLinks(Crawler $crawler)
    {
        $links = $crawler->filter('div#menu ul li div ul li > a')->each(function (Crawler $node) {
            if ($node->link()->getUri() != "http://bsonline.eu/isparduotuve") {
                return $node->link()->getUri();
            }
        });

        return array_values($links);
    }

    protected function getCategoryTitle(Crawler $crawler)
    {
        $pages = $crawler->filter('div#content .breadcrumb')->text();
        $result = explode(">", $pages);
        $title = trim($result[2]);

        return $title;
    }

    protected function getCategoryProducts(Crawler $crawler)
    {
        $links = $crawler->filter('div.image > a')->each(function (Crawler $node) {
            return $node->link()->getUri();
        });

        return array_values($links);
    }

    protected function getPagesCount(Crawler $crawler)
    {
        $pages = $crawler->filter('div.pagination div.results')->text();
        $result = explode("(", $pages);
        $pagesCount = explode(" ", $result[1]);

        return $pagesCount[0];
    }

    protected function getImageUrl(Crawler $crawler)
    {

        $links = $crawler->filter('#container div.image a')->each(function (Crawler $node, $i) {
            return $node->link()->getUri();
        });

        return $links[0];
    }

    protected function getDescriptionText(Crawler $crawler)
    {
        $text = $crawler->filter('#container #content > div.description ')->text();
        return trim($text);
    }
    protected function getProductPrice(Crawler $crawler)
    {
        $price = $crawler->filter(' #container div.product-info div.price ')->text();
        return trim($price);
    }

    protected function getProductTitle(Crawler $crawler)
    {
        $title = $crawler->filter('#container div.product-info div.description h1')->text();
        return $title;
    }

    protected function getProductCurrency(Crawler $crawler)
    {
        $fullPrice = $crawler->filter(' #container div.product-info div.price ')->text();

        if (stripos($fullPrice, '€') !== false || stripos($fullPrice, 'EUR') !== false) {
            return 1;
        } elseif (stripos($fullPrice, '$') !== false || stripos($fullPrice, 'USD') !== false) {
            return 2;
        }

        return 0;
    }
}
