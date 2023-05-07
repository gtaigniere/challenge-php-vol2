<?php

namespace Factorializer;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class FactorializerTest extends TestCase
{
    /**
     * @var Factorializer
     */
    private $factorializer;

    protected function setUp(): void
    {
        $this->factorializer = new Factorializer();
    }

    public function testGivenMinus10ShouldThrowException()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->factorializer->factorialize(-10);
    }

    public function testGiven0ShouldReturn1()
    {
        self::assertEquals(1, $this->factorializer->factorialize(0));
    }

    public function testGiven5ShouldReturn120()
    {
        self::assertEquals(120, $this->factorializer->factorialize(5));
    }

    public function testGiven10shouldReturn3628800()
    {
        self::assertEquals(3628800, $this->factorializer->factorialize(10));
    }
}
