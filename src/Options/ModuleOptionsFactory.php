<?php

namespace ZfcUserDoctrineORM\Options;

class ModuleOptionsFactory
{
    public function __invoke($services)
    {
        $config = $services->get('Configuration');

        $zfcUserConfig = [];
        if($config['zfcuser']) {
            $zfcUserConfig = $config['zfcuser'];
        }

        $moduleOptions = new \ZfcUserDoctrineORM\Options\ModuleOptions($zfcUserConfig);

        return $moduleOptions;
    }
}