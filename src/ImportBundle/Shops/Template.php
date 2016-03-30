<?php

namespace ImportBundle\Shops;

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class Template
{
    public function __construct()
    {

        $this->client = new Client();

    }

    public function CrawlerShortener($link) {

        $response = $this->client->request('GET', $link);
        $crawler = new Crawler($response->getBody()->getContents(), 'http');
        return $crawler;

    }

    public function getPaginationPrefix($shopId, $page)
    {
        if($shopId == 1) {
            return "?page=" . $page;
        } elseif($shopId == 2) {
            return "?p=" . $page;
        } else {
            return "?page=" . $page;
        }
    }
}