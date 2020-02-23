<?php


use Mitquinn\BodyPermissions\BodyParts\Mouth;
use Mitquinn\BodyPermissions\People\Doctor;
use Mitquinn\BodyPermissions\People\Man;
use PHPUnit\Framework\TestCase;

/**
 * Class FirstTest
 */
class FirstTest extends TestCase
{
    public function testThisTestShouldAlwaysRun()
    {
        static::assertTrue(true);
    }


    public function testDoctorCanAccessAMouth()
    {
        $doctor = new Doctor();
        $man = new Man();
        $mouth = $doctor->canAccessMouth($man);
        static::assertInstanceOf(Mouth::class, $mouth);
    }


}