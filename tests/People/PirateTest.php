<?php

use Mitquinn\BodyPermissions\People\Pirate;
use PHPUnit\Framework\TestCase;

/**
 * Class PirateTest
 */
class PirateTest extends TestCase
{
    /** @var Pirate $pirate */
    protected Pirate $pirate;

    protected function setUp(): void
    {
        $this->setPirate(new Pirate());
    }

    public function testInitializationPirate()
    {
        static::assertInstanceOf(Pirate::class, $this->getPirate());
    }

    /*** Getters and Setters ***/

    /**
     * @return Pirate
     */
    public function getPirate(): Pirate
    {
        return $this->pirate;
    }

    /**
     * @param Pirate $pirate
     * @return PirateTest
     */
    public function setPirate(Pirate $pirate): PirateTest
    {
        $this->pirate = $pirate;
        return $this;
    }
}