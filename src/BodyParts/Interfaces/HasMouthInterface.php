<?php


namespace Mitquinn\BodyPermissions\BodyParts\Interfaces;


use Mitquinn\BodyPermissions\BodyParts\Mouth;
use Mitquinn\BodyPermissions\Permissions\Interfaces\CanAccessMouthInterface;

/**
 * Interface HasMouthInterface
 * @package Mitquinn\BodyPermissions\BodyParts\Interfaces
 */
interface HasMouthInterface
{
    /**
     * @param CanAccessMouthInterface $requester
     * @return Mouth
     */
    public function allowAccessMouth(CanAccessMouthInterface $requester): Mouth;

}