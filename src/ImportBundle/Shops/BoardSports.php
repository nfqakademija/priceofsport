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
                return 0;
                break;
            case "Šalmai":
                return 0;
                break;
            case "Kaitai":
                return 0;
                break;
            case "NAUDOTI KAITAI":
                return 0;
                break;
            case "Twin Tip lentos":
                return 0;
                break;
            case "Hidro kostiumai":
                return 0;
                break;
            case "Trapecijos":
                return 0;
                break;
            case "Liemenės":
                return 0;
                break;
            case "Likros":
                return 0;
                break;
            case "Neopreniniai batai":
                return 0;
                break;
            case "Aksesuarai":
                return 0;
                break;
            case "Krepšiai":
                return 0;
                break;
            // Riedlentės
            case "Kruizeriai":
                return 0;
                break;
            case "Longboardai":
                return 0;
                break;
            case "Paspirtukai":
                return 0;
                break;
            case "Riedlentės":
                return 0;
                break;
            case "Apsaugos":
                return 0;
                break;
            case "Ašys":
                return 0;
                break;
            case "Lentos":
                return 0;
                break;
            case "Ratukai":
                return 0;
                break;
            case "Aksesuarai":
                return 0;
                break;
            case "Krepšiai":
                return 0;
                break;
            // Surf / sup
            case "Liemenės":
                return 0;
                break;
            case "Šalmai":
                return 0;
                break;
            case "SUP Lentos":
                return 0;
                break;
            case "SURF Lentos":
                return 0;
                break;
            case "Techniniai Rūbai":
                return 0;
                break;
            case "Hidro kostiumai":
                return 0;
                break;
            case "Neopreniniai batai":
                return 0;
                break;
            case "Aksesuarai":
                return 0;
                break;
            case "Krepšiai":
                return 0;
                break;
            // Laisvalaikio rubai
            case "Kepurės":
                return 0;
                break;
            case "Šlepetės":
                return 0;
                break;
            case "Vyriška apranga":
                return 0;
                break;
            case "Moteriška apranga":
                return 0;
                break;
            // Snieglentes
            case "Snieglentės":
                return 0;
                break;
            case "Apkaustai":
                return 0;
                break;
            case "Batai":
                return 0;
                break;
            case "Vaikiškos":
                return 0;
                break;
            case "Apranga":
                return 0;
                break;
            case "Apsaugos":
                return 0;
                break;
            case "Aksesuarai":
                return 0;
                break;
            case "Krepšiai":
                return 0;
                break;
            case "Slidinėjimo akiniai":
                return 0;
                break;
            // Slides
            case "Lazdos":
                return 0;
                break;
            case "Slidės":
                return 0;
                break;
            case "Apkaustai":
                return 0;
                break;
            case "Batai":
                return 0;
                break;
            case "Slidinėjimo apsaugos":
                return 0;
                break;
            case "Apranga":
                return 0;
                break;
            case "Aksesuarai":
                return 0;
                break;
            case "Krepšiai":
                return 0;
                break;
            case "Slidinėjimo akiniai":
                return 0;
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
