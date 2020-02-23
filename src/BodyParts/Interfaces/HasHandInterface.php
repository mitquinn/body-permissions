<?php


namespace Mitquinn\BodyPermissions\BodyParts\Interfaces;


use Mitquinn\BodyPermissions\BodyParts\Hand;
use Mitquinn\BodyPermissions\Permissions\Interfaces\CanAccessHandInterface;

interface HasHandInterface
{
    /**
     * @param CanAccessHandInterface $requester
     * @return Hand
     */
    public function allowAccessHand(CanAccessHandInterface $requester): Hand;

}