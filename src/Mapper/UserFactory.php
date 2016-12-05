<?php

namespace ZfcUserDoctrineORM\Mapper;

class UserFactory
{
    public function __invoke($services)
    {
        return new \ZfcUserDoctrineORM\Mapper\User(
            $services->get('zfcuser_doctrine_em'),
            $services->get('zfcuser_module_options')
        );
    }
}