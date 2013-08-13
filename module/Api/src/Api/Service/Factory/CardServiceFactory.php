<?php

namespace Api\Service\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class ApiServiceFactory
 *
 * @package Api\Service\Factory
 */
class CardServiceFactory implements FactoryInterface
{

    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return Cost
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $mapper = $serviceLocator->get('Api\Mapper\Card');
        $mapper->setEntityPrototype($serviceLocator->get('Api\Entity\Card'));
        $mapper->setDbAdapter($serviceLocator->get('Zend\Db\Adapter\Adapter'));

        $hydrator = new \Zend\Stdlib\Hydrator\ClassMethods();
        $mapper->setHydrator($hydrator);

        $service = new \Api\Service\Card();
        $service->setServiceManager($serviceLocator);
        $service->setCardMapper($mapper);
        return $service;
    }
}
