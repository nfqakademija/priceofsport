<?php

namespace FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class NotificationType extends AbstractType
{
    public function buildForm( FormBuilderInterface $builder,
                               array $options )
    {
        $builder->add( 'price', 'text' );
        $builder->add( 'email',  'email' );
        $builder->add( 'product_id', 'hidden', array( 'data' => $options['data']['product_id']));
    }


}