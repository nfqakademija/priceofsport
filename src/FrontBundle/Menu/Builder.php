<?php

namespace FrontBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $em = $this->container->get('doctrine')->getManager();
        $categories = $em->getRepository('FrontBundle:Categories')->findByParent(0);
        $current_uri = $this->container->get('request')->getRequestUri();
        foreach($categories as $key => $value)
        {
            $uri = '/category/'.$value->getToken();
            $menu->addChild($value->getId(), array(
                'uri' => $uri,
                'attributes' => array('class' => 'nav-item'),
                'label' => $value->getName(),
                'linkAttributes' => array('class' => 'nav-link')
            ));
            if($current_uri == $uri) $menu[$value->getId()]->setCurrent(true);

            $childs = $em->getRepository('FrontBundle:Categories')->findByParent($value->getId());
            foreach($childs as $child_key => $child_value)
            {
                $uri = '/category/'.$value->getToken().'/'.$child_value->getToken();
                $menu[$value->getId()]->addChild($child_value->getId(), array(
                    'uri' => $uri,
                    'attributes' => array('class' => 'nav-item-2'),
                    'label' => $child_value->getName(),
                    'linkAttributes' => array('class' => 'nav-link-2')
                ));
                if($current_uri == $uri)
                {
                    $menu[$value->getId()]->setCurrent(true);
                    $menu[$value->getId()][$child_value->getId()]->setCurrent(true);
                }
            }
        }

        $menu->setChildrenAttribute('class', 'nav nav-pills nav-stacked');

        return $menu;
    }
}