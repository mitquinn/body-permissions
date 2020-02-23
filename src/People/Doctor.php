<?php

namespace Mitquinn\BodyPermissions\People;

use Mitquinn\BodyPermissions\Permissions\Interfaces\CanAccessHandInterface;
use Mitquinn\BodyPermissions\Permissions\Traits\CanAccessHand;
use Mitquinn\BodyPermissions\Permissions\Traits\CanAccessMouth;
use Mitquinn\BodyPermissions\Permissions\Interfaces\CanAccessMouthInterface;

/**
 * Class Doctor
 * @package Mitquinn\BodyPermissions\People
 */
class Doctor extends Person implements CanAccessMouthInterface, CanAccessHandInterface
{
    use CanAccessMouth, CanAccessHand;

}