<?php

namespace ZfcUserDoctrineORM;

use Doctrine\ORM\Mapping\Driver\XmlDriver;

class Module
{
    public function onBootstrap($e)
    {
        $app     = $e->getParam('application');
        $sm      = $app->getServiceManager();
        $options = $sm->get('zfcuser_module_options');

        // Add the default entity driver only if specified in configuration
        if ($options->getEnableDefaultEntities()) {
            $chain = $sm->get('doctrine.driver.orm_default');
            $chain->addDriver(new XmlDriver(__DIR__ . '/../config/xml/zfcuserdoctrineorm'), 'ZfcUserDoctrineORM\Entity');
        }
    }

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
