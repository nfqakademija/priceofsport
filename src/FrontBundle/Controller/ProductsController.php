<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProductsController extends Controller
{

    /**
     * @Route ("{category_token}/{subcategory_token}")
     * @Route ("{category}")
     */
    public function getProductsList($category_token = null, $subcategory_token = null)
    {
        if(isset($category_token))
        {
            if(isset($subcategory_token))
            {
                $categoryObj = $this->getCategoryByToken($category_token);
                $subcategoryObj = $this->getSubCategoryByToken($categoryObj->getId(), $subcategory_token);

                $productsObj = $this->getDoctrine()
                    ->getRepository('ImportBundle:Product')
                    ->findBy(array(
                        'shop_id' => $subcategoryObj->getId()
                    ));

                $params = [
                    'categoryId' => $categoryObj->getId(),
                    'subcategoryId' => $subcategoryObj->getId(),
                    'pageTitle' => $subcategoryObj->getName(). " - ". $categoryObj->getName(),
                    'products' => $productsObj
                ];
            } else {
                $categoryObj = $this->getCategoryByToken($category_token);
                $productsObj = $this->getDoctrine()
                    ->getRepository('ImportBundle:Product')
                    ->findBy(array(
                       'shop_id' => $categoryObj->getId()
                    ));

                $params = [
                    'categoryId' => $categoryObj->getId(),
                    'pageTitle' => $categoryObj->getName(),
                    'products' => $productsObj
                ];
            }
            return $this->render('FrontBundle:Default:productsList.html.twig', $params);
        }
    }

    /**
     * @param $token
     */
    public function getCategoryByToken($token)
    {
        $obj = $this->getDoctrine()
            ->getRepository('FrontBundle:Categories')
            ->findOneBy(array(
                'parent' => 0,
                'token' => $token
            ));

        return $obj;
    }

    public function getSubCategoryByToken($categoryId, $token)
    {
        $obj = $this->getDoctrine()
            ->getRepository('FrontBundle:Categories')
            ->findOneBy(array(
                'parent' => $categoryId,
                'token' => $token
            ));

        return $obj;
    }
}