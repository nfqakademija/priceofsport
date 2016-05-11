<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('keyword', 'Symfony\Component\Form\Extension\Core\Type\SearchType')
            ->add('send', 'Symfony\Component\Form\Extension\Core\Type\SubmitType')
            ->getForm();

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            $keyword = $form->getData()['keyword'];

            return $this->redirectToRoute('search_results', array(
                'keyword' => $keyword,
            ));
        }

        $params = [
            'randomProducts' => $this->getRandomProducts(12),
            'shops' => $this->getShops(),
            'form' => $form->createView()
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
