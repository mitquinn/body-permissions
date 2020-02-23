<?php


use Mitquinn\BodyPermissions\BodyParts\Hand;
use Mitquinn\BodyPermissions\BodyParts\Mouth;
use Mitquinn\BodyPermissions\People\Doctor;
use Mitquinn\BodyPermissions\People\Man;
use PHPUnit\Framework\TestCase;

/**
 * Class DoctorTest
 */
class DoctorTest extends TestCase
{
    /** @var Doctor $doctor */
    protected Doctor $doctor;

    protected function setUp(): void
    {
        $this->setDoctor(new Doctor());
    }

    public function testInitializationDoctor()
    {
        static::assertInstanceOf(Doctor::class, $this->getDoctor());
    }

    public function testDoctorCanExamineMouth()
    {
        $man = new Man();
        $mouth = $this->getDoctor()->canAccessMouth($man);
        static::assertInstanceOf(Mouth::class, $mouth);
        static::assertIsString($mouth->open());
        static::assertEquals('open', $mouth->open());
        static::assertIsString($mouth->close());
        static::assertEquals('close', $mouth->close());
    }

    public function testDoctorCanExamineHand()
    {
        $hand = $this->getDoctor()->canAccessHand(new Man());
        static::assertInstanceOf(Hand::class, $hand);
        $numberOfFingers = $hand->countFingers();
        static::assertIsInt($numberOfFingers);
        static::assertEquals(10, $numberOfFingers);
    }

    /**
     * @return Doctor
     */
    public function getDoctor(): Doctor
    {
        return $this->doctor;
    }

    /**
     * @param Doctor $doctor
     * @return DoctorTest
     */
    public function setDoctor(Doctor $doctor): DoctorTest
    {
        $this->doctor = $doctor;
        return $this;
    }
}