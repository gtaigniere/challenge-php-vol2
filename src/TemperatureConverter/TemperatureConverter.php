<?php


namespace TemperatureConverter;


class TemperatureConverter
{
    /**
     * Conversion d'une température celsius en fahrenheit
     * @param float $celsius
     * @return float
     */
    public function toFahrenheit(float $celsius): float
    {
        return $celsius * 9 / 5 + 32;
    }
}