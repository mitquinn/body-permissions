<?php

namespace Mitquinn\BodyPermissions\BodyParts;

/**
 * Class Mouth
 * @package Mitquinn\BodyPermissions\BodyParts
 */
class Mouth
{
    /** @var string $mouth */
    protected string $mouth = 'closed';

    /**
     * @return string
     */
    public function open()
    {
        return $this->setMouth('open')->getMouth();
    }

    /**
     * @return string
     */
    public function close()
    {
        return $this->setMouth('close')->getMouth();
    }

    /*** Getters and Setters ***/

    /**
     * @return string
     */
    public function getMouth(): string
    {
        return $this->mouth;
    }

    /**
     * @param string $mouth
     * @return Mouth
     */
    public function setMouth(string $mouth): Mouth
    {
        $this->mouth = $mouth;
        return $this;
    }
}