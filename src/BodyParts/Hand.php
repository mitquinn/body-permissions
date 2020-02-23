<?php

namespace Mitquinn\BodyPermissions\BodyParts;

use Exception;
use Mitquinn\BodyPermissions\BodyParts\Interfaces\HasHandInterface;

/**
 * Class Hands
 * @package Mitquinn\BodyPermissions\BodyParts
 */
class Hand
{
    /** @var int $numberOfHands */
    protected int $numberOfHands = 2;

    /** @var int $numberOfFingersPerHand */
    protected int $numberOfFingersPerHand = 5;

    /**
     * @return int
     */
    public function countFingers(): int
    {
        return $this->getNumberOfHands()*$this->getNumberOfFingersPerHand();
    }

    /**
     * @return int
     */
    public function getNumberOfHands(): int
    {
        return $this->numberOfHands;
    }

    /**
     * @param int $numberOfHands
     * @return Hand
     */
    public function setNumberOfHands(int $numberOfHands): Hand
    {
        $this->numberOfHands = $numberOfHands;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfFingersPerHand(): int
    {
        return $this->numberOfFingersPerHand;
    }

    /**
     * @param int $numberOfFingersPerHand
     * @return Hand
     */
    public function setNumberOfFingersPerHand(int $numberOfFingersPerHand): Hand
    {
        $this->numberOfFingersPerHand = $numberOfFingersPerHand;
        return $this;
    }

}