<?php

namespace TemperatureConverter;

use PHPUnit\Framework\TestCase;

class TemperatureConverterTest extends TestCase
{
    /**
     * @var TemperatureConverter
     */
    private $converter;

    protected function setUp(): void
    {
        $this->converter = new TemperatureConverter();
    }

    public function testGiven0WhenConvertingToFahrenheitThenResultMustBeFloat()
    {
        self::assertTrue(is_float($this->converter->toFahrenheit(0)));
    }

    public function testGivenMinus0WhenConvertingToFahrenheitThenResultMustBeMinus32()
    {
        self::assertEquals(32, $this->converter->toFahrenheit(0));
    }

    public function testGivenMinus30WhenConvertingToFahrenheitThenResultMustBeMinus22()
    {
        self::assertEquals(-22.0, $this->converter->toFahrenheit(30));
    }
}
