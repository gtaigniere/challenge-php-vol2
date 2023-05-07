<?php

namespace StringReverser;

use PHPUnit\Framework\TestCase;

class StringReverserTest extends TestCase
{
    /**
     * @var StringReverser
     */
    private $reverser;

    protected function setUp(): void
    {
        $this->reverser = new StringReverser();
    }

    public function testGivenhelloShouldReturnolleh()
    {
        self::assertEquals('olleh', $this->reverser->reverse("hello"));
    }

    public function testGivenGreetings_from_EarthShouldReturnhtraE_morf_sgniteerG()
    {
        self::assertEquals('Greetings from Earth', $this->reverser->reverse("htraE morf sgniteerG"));
    }


}
