<?php
namespace PayumDoctrineORMModule;

use Doctrine\ORM\Mapping\Driver\XmlDriver;
use Doctrine\Common\Persistence\Mapping\Driver\DefaultFileLocator;

class Module{

	public function onBootstrap($e)
    {
        $app     = $e->getParam('application');
        $sm      = $app->getServiceManager();
        
        // Add the default entity driver only if specified in configuration
        $chain = $sm->get('doctrine.driver.orm_default');
        $locator = new DefaultFileLocator(__DIR__ . '/config/xml/payumdoctrineorm', ".dcm.xml");
        $chain->addDriver(new XmlDriver($locator), 'PayumDoctrineORMModule\Entity');
        // var_dump($chain->getAllClassNames());die();
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                 __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    
    public function getServiceConfig()
    {
        return array(
            
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}