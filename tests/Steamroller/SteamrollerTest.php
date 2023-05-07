<?php

namespace Steamroller;

use PHPUnit\Framework\TestCase;

class SteamrollerTest extends TestCase
{
    /**
     * @var Steamroller
     */
    private $roller;

    protected function setUp(): void
    {
        $this->roller = new Steamroller();
    }

    public function test1()
    {
        self::assertEquals(["a", "b"], $this->roller->steamrollArray([[["a"]], [["b"]]]));
    }

    public function test2()
    {
        self::assertEquals([1, 2, 3, 4], $this->roller->steamrollArray([1, [2], [3, [[4]]]]));
    }

    public function test3()
    {
        self::assertEquals([1, [], [3, [[4]]]], $this->roller->steamrollArray([1, 3, 4]));
    }

}
