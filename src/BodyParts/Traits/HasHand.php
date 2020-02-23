<?php

namespace Mitquinn\BodyPermissions\BodyParts\Traits;

use Exception;
use Mitquinn\BodyPermissions\BodyParts\Hand;
use Mitquinn\BodyPermissions\Permissions\Interfaces\CanAccessHandInterface;

/**
 * Trait HasHand
 * @package Mitquinn\BodyPermissions\BodyParts\Traits
 */
trait HasHand
{
    /** @var Hand $hand */
    protected ?Hand $hand = null;

    /**
     * @param CanAccessHandInterface $requester
     * @return Hand
     * @throws Exception
     */
    public function allowAccessHand(CanAccessHandInterface $requester): Hand
    {
        return $this->getHand();
    }


    /*** Getters and Setters ***/

    /**
     * @return Hand
     */
    protected function getHand(): Hand
    {
        if (is_null($this->hand)) {
            $this->setHand(new Hand());
        }
        return $this->hand;
    }

    /**
     * @param Hand $hand
     * @return HasHand
     */
    protected function setHand(Hand $hand): self
    {
        $this->hand = $hand;
        return $this;
    }

}