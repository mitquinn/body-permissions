<?php

namespace Mitquinn\BodyPermissions\People;

use Mitquinn\BodyPermissions\BodyParts\Interfaces\HasHandInterface;
use Mitquinn\BodyPermissions\BodyParts\Interfaces\HasMouthInterface;
use Mitquinn\BodyPermissions\BodyParts\Traits\HasHand;
use Mitquinn\BodyPermissions\BodyParts\Traits\HasMouth;

/**
 * Class Person
 * @package Mitquinn\BodyPermissions\People
 */
abstract class Person implements HasMouthInterface, HasHandInterface
{
    use HasMouth, HasHand;

}