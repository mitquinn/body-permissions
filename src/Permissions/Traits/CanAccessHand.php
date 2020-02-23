<?php


namespace Mitquinn\BodyPermissions\Permissions\Traits;


use Mitquinn\BodyPermissions\BodyParts\Hand;
use Mitquinn\BodyPermissions\BodyParts\Interfaces\HasHandInterface;

trait CanAccessHand
{
    public function canAccessHand(HasHandInterface $hasHand): Hand
    {
        return $hasHand->allowAccessHand($this);
    }
}