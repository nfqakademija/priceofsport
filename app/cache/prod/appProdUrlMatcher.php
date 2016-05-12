<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // front_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'front_default_index');
            }

            return array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'front_default_index',);
        }

        if (0 === strpos($pathinfo, '/category')) {
            // front_default_getproductsbycategory
            if (preg_match('#^/category/(?P<category>[^/]++)/(?P<subcategory>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_default_getproductsbycategory')), array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::getProductsByCategory',));
            }

            // front_default_getproductsbycategory_1
            if (preg_match('#^/category/(?P<category>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_default_getproductsbycategory_1')), array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::getProductsByCategory',));
            }

        }

        // front_products_getproductslist
        if (preg_match('#^/(?P<category_token>[^/]++)?(?:/(?P<subcategory_token>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_products_getproductslist')), array (  'category_token' => NULL,  'subcategory_token' => NULL,  '_controller' => 'FrontBundle\\Controller\\ProductsController::getProductsList',));
        }

        // front_products_getproductslist_1
        if (preg_match('#^/(?P<category>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_products_getproductslist_1')), array (  'category_token' => NULL,  'subcategory_token' => NULL,  '_controller' => 'FrontBundle\\Controller\\ProductsController::getProductsList',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
