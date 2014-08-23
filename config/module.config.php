<?php
return array(
    'doctrine' => array(
        'driver' => array(
            'payum' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\XmlDriver',
                'paths' =>  __DIR__."/xml/payum"
            ),
            'payum_entity'=> array(
                'class' => 'Doctrine\ORM\Mapping\Driver\XmlDriver',
                'paths' =>  __DIR__."/xml/payumdoctrineorm"
            ),
            'orm_default' => array(
                'drivers' => array(
                    'Payum\Model' => 'payum',
                    'Payum\Paypal\ExpressCheckout\Nvp\Model' => 'payum',
                    'PayumDoctrineORMModule\Entity' => 'payum_entity',
                ),
            ),
        ),
    ),
);
