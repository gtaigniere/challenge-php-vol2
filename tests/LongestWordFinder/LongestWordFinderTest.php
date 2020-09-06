<?php

namespace LongestWordFinder;

use PHPUnit\Framework\TestCase;

class LongestWordFinderTest extends TestCase
{
    /**
     * @var LongestWordFinderLength
     */
    private $finder;

    protected function setUp(): void
    {
        $this->finder = new LongestWordFinderLength();
    }

    public function testGivenEmptyShouldReturn0()
    {
        self::assertEquals(19, $this->finder->find('What if we try a super-long word such as otorhinolaryngology'));
    }

    public function testGivenThe_quick_brown_fox_jumped_over_the_lazy_dogShouldReturn6()
    {
        self::assertEquals(6, $this->finder->find('The quick brown fox jumped over the lazy dog'));
    }

    public function testGivenMay_the_force_be_with_youShouldReturn5()
    {
        self::assertEquals(5, $this->finder->find('May the force be with you'));
    }

    public function testGivenWhat_if_we_try_a_super_long_word_such_as_otorhinolaryngologyShouldReturn19()
    {
        self::assertEquals(19, $this->finder->find('What if we try a super-long word such as otorhinolaryngology'));
    }

}
