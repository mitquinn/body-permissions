<?php

namespace Mitquinn\BodyPermissions\Permissions\Interfaces;

use Mitquinn\BodyPermissions\BodyParts\Hand;
use Mitquinn\BodyPermissions\BodyParts\Interfaces\HasHandInterface;

/**
 * Interface CanAccessHandInterface
 * @package Mitquinn\BodyPermissions\Permissions\Interfaces
 */
interface CanAccessHandInterface
{
    public function canAccessHand(HasHandInterface $hasAMouth): Hand;
}