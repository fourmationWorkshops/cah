<?php

namespace Api\Service;

use Zend\ServiceManager\ServiceManagerAwareInterface;
use Zend\ServiceManager\ServiceManager;

class Card implements ServiceManagerAwareInterface
{
    /**
     * @var CardMapperInterface
     */
    protected $cardMapper;

    /**
     * @var ServiceManager
     */
    protected $serviceManager;

    /**
     * @var Hydrator\ClassMethods
     */
    protected $formHydrator;

    public function getCard($cardId)
    {
        try {
            $currentCard = $this->getCardMapper()->find((int) $cardId);
        } catch (\Api\Exception\CardException $e) {
            return $e;
        }

        return $currentCard;
    }

    public function getAllCards()
    {
        return $this->getCardMapper()->find();
    }

    /**
     * Get Card Mapper
     *
     * @return CardMapperInterface
     */
    public function getCardMapper()
    {
        if (null === $this->cardMapper) {
            $this->cardMapper = $this->getServiceManager()->get('card_mapper_card');
        }
        return $this->cardMapper;
    }

    /**
     * Set Card Mapper
     *
     * @param $cardMapper
     * @return Card
     */
    public function setCardMapper($cardMapper)
    {
        $this->cardMapper = $cardMapper;
        return $this;
    }

    /**
     * Retrieve service manager instance
     *
     * @return ServiceManager
     */
    public function getServiceManager()
    {
        return $this->serviceManager;
    }

    /**
     * Set service manager instance
     *
     * @param ServiceManager $serviceManager
     * @return Card
     */
    public function setServiceManager(ServiceManager $serviceManager)
    {
        $this->serviceManager = $serviceManager;
        return $this;
    }
}
