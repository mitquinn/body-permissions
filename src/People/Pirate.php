<?php

namespace Mitquinn\BodyPermissions\People;

/**
 * Class Pirate
 * @package Mitquinn\BodyPermissions\People
 */
class Pirate extends Person
{
    /**
     * Pirate constructor.
     */
    public function __construct()
    {
        // Pirates have one hand and a hook.
        $this->getHand()->setNumberOfHands(1);
        $this->getHand()->setNumberOfFingersPerHand(4);
    }
}
