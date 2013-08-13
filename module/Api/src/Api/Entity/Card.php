<?php

namespace Api\Entity;

class Card
{
    /**
     * @var integer $cardId
     */
    protected $cardId;

    /**
     * @var string $title
     */
    protected $title;

    /**
     * @var string - Color
     */
    protected $color;

    /**
     * @return the $cardId
     */
    public function getCardId()
    {
        return $this->cardId;
    }

    /**
     * @return the $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return the $color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param number $cardId
     */
    public function setCardId($cardId)
    {
        $this->cardId = $cardId;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

}
