<?php

namespace ZfcUserDoctrineORM;

use ZfcUserDoctrineORM\Mapper\UserFactory;
use ZfcUserDoctrineORM\Options\ModuleOptionsFactory;

return array(
    'doctrine' => array(
        'driver' => array(
            'zfcuser_entity' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\XmlDriver',
                'paths' => __DIR__ . '/xml/zfcuser'
            ),

            'orm_default' => array(
                'drivers' => array(
                    'ZfcUser\Entity'  => 'zfcuser_entity'
                )
            )
        )
    ),
    'service_manager' => [
        'aliases' => array(
            'zfcuser_doctrine_em' => 'Doctrine\ORM\EntityManager',
        ),
        'factories' => array(
            'zfcuser_module_options' => ModuleOptionsFactory::class,
            'zfcuser_user_mapper' => UserFactory::class
        )
    ]
);
