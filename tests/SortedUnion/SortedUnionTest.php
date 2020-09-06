<?php

namespace SortedUnion;

use PHPUnit\Framework\TestCase;

class SortedUnionTest extends TestCase
{
    /**
     * @var SortedUnion
     */
    private $sortedUnion;

    protected function setUp(): void
    {
        $this->sortedUnion = new SortedUnion();
    }

    public function testGivenEmptyArrayShouldReturnEmptyArray()
    {
        self::assertEquals([], $this->sortedUnion->sort([]));
    }

    public function testGivenA1_3_2A5_2_1_4A2_1() {
        self::assertEquals([1, 2, 3, 4, 5], $this->sortedUnion->sort([1, 3, 2], [5, 2, 1, 4], [2, 1]));
    }

}
