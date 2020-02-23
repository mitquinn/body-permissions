<?php

use Mitquinn\BodyPermissions\BodyParts\Mouth;
use Mitquinn\BodyPermissions\People\Doctor;
use Mitquinn\BodyPermissions\People\Man;
use Mitquinn\BodyPermissions\People\Pirate;
use PHPUnit\Framework\TestCase;

/**
 * Class ManTest
 */
class ManTest extends TestCase
{
    /** @var Man $man */
    protected Man $man;

    /**
     * Setup
     */
    protected function setUp(): void
    {
        $this->setMan(new Man());
    }

    /**
     * Test Initialize Man
     */
    public function testInitializeMan()
    {
        static::assertInstanceOf(Man::class, $this->getMan());
    }

    /*** Getters and Setters ***/

    /**
     * @return Man
     */
    public function getMan(): Man
    {
        return $this->man;
    }

    /**
     * @param Man $man
     * @return ManTest
     */
    public function setMan(Man $man): ManTest
    {
        $this->man = $man;
        return $this;
    }

}
