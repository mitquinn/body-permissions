<?php

namespace Mitquinn\BodyPermissions\BodyParts\Traits;

use Exception;
use Mitquinn\BodyPermissions\BodyParts\Mouth;
use Mitquinn\BodyPermissions\Permissions\Interfaces\CanAccessMouthInterface;

/**
 * Trait HasAMouth
 * @package Mitquinn\BodyPermissions\BodyParts\Traits
 */
trait HasMouth
{
    /** @var Mouth $mouth */
    protected ?Mouth $mouth = null;

    /**
     * @param CanAccessMouthInterface $requester
     * @return Mouth
     */
    public function allowAccessMouth(CanAccessMouthInterface $requester): Mouth
    {
        return $this->getMouth();
    }


    /*** Getters and Setters ***/

    /**
     * @return Mouth
     */
    protected function getMouth(): Mouth
    {
        if (is_null($this->mouth)) {
            $this->setMouth(new Mouth());
        }
        return $this->mouth;
    }

    /**
     * @param Mouth $mouth
     * @return self
     */
    protected function setMouth(Mouth $mouth): self
    {
        $this->mouth = $mouth;
        return $this;
    }
}