<?php
namespace Api\Mapper;

use ZfcBase\Mapper\AbstractDbMapper;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Stdlib\Hydrator\Reflection as ReflectionHydrator;

class Card extends AbstractDbMapper
{
    protected $tableName  = 'card';

    public function find($cardId = null)
    {
        $select = $this->getSelect();

        if ($cardId) {
            $select->where(array('card_id' => (int) $cardId));
            $entity = $this->select($select)->current();
        } else {
            $entity = $this->select($select);
        }

        return $entity;
    }

    public function insert($entity)
    {
        $result = parent::insert($entity);
        $entity->setCardId($result->getGeneratedValue());
        return $result;
    }

    public function update($entity)
    {
        $result = parent::update($entity, array('card_id' => $entity->getCardId()));
        return $result;
    }
}