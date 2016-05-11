<?php

namespace FrontBundle\Controller;


use FrontBundle\Entity\SearchQuery;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SearchController extends Controller
{
    /**
     * @Route("/search-results/{keyword}", name="search_results")
     */
    public function searchResults($keyword) {

        $params = [
            'searchResults' => $this->getResultByKeyword($keyword),
            'keyword' => $keyword,
        ];

        return $this->render('FrontBundle:Default:searchResult.html.twig', $params);

    }
    function getResultByKeyword(string $keyword) {
        $em = $this->getDoctrine()->getManager();

        $result = $em->getRepository("ImportBundle:Product")->createQueryBuilder('p')
            ->where('p.title LIKE :keyword OR p.description LIKE :keyword')
            ->setParameter('keyword', '%'.$keyword.'%')
            ->getQuery()
            ->getResult();

        return $result;
    }
}