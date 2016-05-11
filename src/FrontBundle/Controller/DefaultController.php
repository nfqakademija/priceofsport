<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $params = [
            'randomProducts' => $this->getRandomProducts(12),
            'shops' => $this->getShops()
        ];

        return $this->render('FrontBundle:Default:index.html.twig', $params);
    }

    /**
     * @Route("/")
     */
    public function headerMenu() {
        $params = [
            'randomProducts' => $this->getRandomProducts(12),
            'shops' => $this->getShops()
        ];

        return $this->render('base.html.twig', $params);
    }
    
//    /**
//     * @Route("category/{category}/{subcategory}")
//     * @Route("category/{category}")
//     */
//    public function getProductsByCategory()
//    {
//        return $this->render('FrontBundle:Default:index.html.twig');
//    }


    /**
     * @param $amount
     * @return mixed
     */
    public function getRandomProducts($amount) {
        $products = $this->getDoctrine()->getRepository('ImportBundle:Product')->findAll();
        shuffle($products);

        $randomProducts = array();

        for ($i = 0; $i < $amount; $i++) {
            $randomProducts[$i] = $products[$i];
        }
        
        return $randomProducts;
    }

    public function getShops() {
        $shops = $this->getDoctrine()->getRepository('ImportBundle:Shop')->findAll();

        return $shops;
    }
    

}
