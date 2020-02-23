<?php


namespace Mitquinn\BodyPermissions\Permissions\Traits;


use Mitquinn\BodyPermissions\BodyParts\Interfaces\HasMouthInterface;
use Mitquinn\BodyPermissions\BodyParts\Mouth;

trait CanAccessMouth
{
    /**
     * @param HasMouthInterface $hasMouth
     * @return Mouth
     */
    public function canAccessMouth(HasMouthInterface $hasMouth): Mouth
    {
        return $hasMouth->allowAccessMouth($this);
    }
}