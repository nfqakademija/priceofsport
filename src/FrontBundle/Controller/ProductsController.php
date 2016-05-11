<?php

namespace FrontBundle\Controller;

use Proxies\__CG__\ImportBundle\Entity\ProductPageLink;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ProductsController extends Controller
{

    /**
     * @Route ("category/{category_token}/{subcategory_token}")
     * @Route ("category/{category}")
     */
    public function getProductsList($category_token = null, $subcategory_token = null)
    {
        if(isset($category_token))
        {
            $categoryObj = $this->getCategoryByToken($category_token);
            if($categoryObj)
            {
                if (isset($subcategory_token))
                {
                    $subcategoryObj = $this->getSubCategoryByToken($categoryObj->getId(), $subcategory_token);
                    if($subcategoryObj)
                    {
                        $productPageLink = $this->getDoctrine()
                            ->getRepository('ImportBundle:ProductPageLink')
                            ->findBy(array(
                                'categoryId' => $subcategoryObj->getId()
                            ));


                        $productsObj = array();
                        foreach ($productPageLink as $k => $v) {
                            $productsObj[] = $v->getProducts();
                        }
                        //var_dump($productsObj);

                        $params = [
                            'categoryId' => $categoryObj->getId(),
                            'subcategoryId' => $subcategoryObj->getId(),
                            'pageTitle' => $subcategoryObj->getName() . " - " . $categoryObj->getName(),
                            'products' => $productsObj
                        ];
                    } else
                    {
                        throw new \Exception(
                            'SubCategory not found'
                        );
                    }
                } else
                {
                    $productPageLink = $this->getDoctrine()
                        ->getRepository('ImportBundle:ProductPageLink')
                        ->findBy(array(
                            'categoryId' => $categoryObj->getId()
                        ));


                    $productsObj = array();
                    foreach ($productPageLink as $k => $v) {
                        $productsObj[] = $v->getProducts();
                    }

                    $params = [
                        'categoryId' => $categoryObj->getId(),
                        'pageTitle' => $categoryObj->getName(),
                        'products' => $productsObj
                    ];
                }
            } else
            {
                throw new \Exception(
                    'Category not found'
                );
            }
            return $this->render('FrontBundle:Default:productsList.html.twig', $params);
        }
    }


    /**
     *
     * @Route ("product/{token}")
     *
     */
    public function getProductItem($token)
    {
        $product = $this->getDoctrine()
            ->getRepository('ImportBundle:Product')
            ->findOneBy(array(
                'token' => $token
            ));
        //var_dump($product);
        $prices = $this->getDoctrine()
            ->getRepository('ImportBundle:PriceHistory')
            ->findByProductId($product);

        $params = [
            'product' => $product,
            'prices' => $prices,
            'minPrice' => min($prices)
        ];

        return $this->render('FrontBundle:Default:productItem.html.twig', $params);
    }

    /**
     *
     * @Route ("product/{token}/json")
     *
     */
    public function getProductPricesJson($token)
    {
        $product = $this->getDoctrine()
            ->getRepository('ImportBundle:Product')
            ->findOneBy(array(
                'token' => $token
            ));

        $prices = $this->getDoctrine()
            ->getRepository('ImportBundle:PriceHistory')
            ->findByProductId($product);
        $item = [
            'cols' =>
            array(
                array(
                    'id' => '',
                    'label' => 'Data',
                    'pattern' => '',
                    'type' => 'string'
                ),
                array(
                    'id' => '',
                    'label' => 'Kaina',
                    'pattern' => '',
                    'type' => 'number'
                )
            ),
        ];
        foreach($prices as $value) {
            $item['rows'][]['c'] = array(array('v' => $value->getDateAdded(), 'f' => ''), array('v' => $value->getPrice(), 'f' => ''));
        }

        //echo "<pre>";
        //echo print_r($item);

        $response = new Response(json_encode($item));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
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
