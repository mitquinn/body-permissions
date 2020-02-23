<?php

namespace Mitquinn\BodyPermissions\Permissions\Interfaces;

use Mitquinn\BodyPermissions\BodyParts\Interfaces\HasMouthInterface;
use Mitquinn\BodyPermissions\BodyParts\Mouth;

/**
 * Interface CanAccessMouthInterface
 * @package Mitquinn\BodyPermissions\Permissions\Interfaces
 */
interface CanAccessMouthInterface
{
    public function canAccessMouth(HasMouthInterface $hasMouth): Mouth;
}