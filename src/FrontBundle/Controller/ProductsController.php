<?php

namespace FrontBundle\Controller;

use Proxies\__CG__\ImportBundle\Entity\ProductPageLink;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use FrontBundle\Form\NotificationType;
use Symfony\Component\HttpFoundation\Request;

class ProductsController extends Controller
{

    /**
     * @Route( "/notification/add", name="create_post" )
     *
     */
    public function createAction( Request $request )
    {
        $form = $this->createFormBuilder(new NotificationType());
        if ( $request->isMethod( 'POST' ) ) {

            $form->handleRequest($request);

            if ( $form->isValid( ) ) {

                $data = $form->getData();

                $response['success'] = true;

            }else{

                $response['success'] = false;
                $response['cause'] = 'whatever';

            }

            var_dump($response);

            return new JsonResponse( $response );
        }
    }

    /**
     * @Route ("category/{category_token}/{subcategory_token}")
     * @Route ("category/{category}")
     */
    public function getProductsList($category_token = null, $subcategory_token = null)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('ImportBundle:ProductPageLink');

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
                        $productPageLink = $repository
                            ->findBy(array(
                                'categoryId' => $subcategoryObj->getId()
                            ));

                        $productsObj = array();
                        foreach ($productPageLink as $k => $v) {
                            $productsObj[] = $v->getProducts();
                        }

                        $paginator  = $this->get('knp_paginator');
                        $pagination = $paginator->paginate(
                            $productsObj,
                            $this->get('request')->query->getInt('page', 1),
                            20  /*limit per page*/
                        );
                        
                        $params = [
                            'categoryId' => $categoryObj->getId(),
                            'subcategoryId' => $subcategoryObj->getId(),
                            'pageTitle' => $subcategoryObj->getName() . " - " . $categoryObj->getName(),
                            'products' => $pagination
                        ];
                    } else
                    {
                        throw new \Exception(
                            'SubCategory not found'
                        );
                    }
                } else
                {
                    $categories = $this->getSubCategoryByParent($categoryObj->getId());

                    foreach($categories as $value) {
                        $productPageLink[] = $repository
                            ->findBy(array(
                                'categoryId' => $value->getId()
                            ));
                    }

                    $productsObj = array();
                    foreach ($productPageLink as $value) {
                        foreach($value as $v) {
                            $productsObj[] = $v->getProducts();
                        }
                    }

                    $paginator  = $this->get('knp_paginator');
                    $pagination = $paginator->paginate(
                        $productsObj,
                        $this->get('request')->query->getInt('page', 1),
                        20  /*limit per page*/
                    );

                    $params = [
                        'categoryId' => $categoryObj->getId(),
                        'pageTitle' => $categoryObj->getName(),
                        'products' => $pagination
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
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('ImportBundle:Product');

        $product = $repository->findOneBy(array(
            'token' => $token
        ));

        $repository = $em->getRepository('ImportBundle:PriceHistory');
        $prices = $repository->findByProductId($product);

        $postform = $this->createForm( new NotificationType(), array('product_id' => $product->getId()) );

        $params = [
            'product' => $product,
            'prices' => $prices,
            'minPrice' => min($prices),
            'postform' => $postform->createView()
        ];

        return $this->render('FrontBundle:Default:productItem.html.twig', $params);
    }

    /**
     * @param $token
     */
    public function getCategoryByToken($token)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('FrontBundle:Categories');

        $obj = $repository
            ->findOneBy(array(
                'parent' => 0,
                'token' => $token
            ));

        return $obj;
    }

    public function getSubCategoryByToken($categoryId, $token)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('FrontBundle:Categories');

        $obj = $repository
            ->findOneBy(array(
                'parent' => $categoryId,
                'token' => $token
            ));

        return $obj;
    }

    public function getSubCategoryByParent($categoryId)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('FrontBundle:Categories');

        $obj = $repository
            ->findBy(array(
                'parent' => $categoryId
            ));

        return $obj;
    }
}
