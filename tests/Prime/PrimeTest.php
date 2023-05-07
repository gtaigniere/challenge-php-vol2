<?php

namespace Prime;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class PrimeTest extends TestCase
{
    /**
     * @var Prime
     */
    private $prime;

    protected function setUp(): void
    {
        $this->prime = new Prime();
    }

    public function testGiven0ShouldThrowException()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->prime->sumAll(0);
    }

    public function testGivenMinus1ShouldThrowException()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->prime->sumAll(-1);
    }

    public function testGiven10ShouldReturn17()
    {
        self::assertEquals(17, $this->prime->sumAll(10));
    }

    public function testGiven977ShouldReturn73156()
    {
        self::assertEquals(1060, $this->prime->sumAll(100));
    }

}
