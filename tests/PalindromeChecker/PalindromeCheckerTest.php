<?php

namespace PalindromeChecker;

use PHPUnit\Framework\TestCase;

class PalindromeCheckerTest extends TestCase
{
    /**
     * @var PalindromeChecker
     */
    private $checker;

    protected function setUp(): void
    {
        $this->checker = new PalindromeChecker();
    }

    public function testGiveneyeShouldReturnTrue()
    {
        self::assertTrue($this->checker->check("eye"));
    }

    public function testGiven__eyeShouldReturnTrue()
    {
        self::assertTrue($this->checker->check("_eye"));
    }

    public function testGiven_race_carShouldReturnTrue()
    {
        self::assertTrue($this->checker->check("race car"));
    }

    public function testGivenrace_not_a_palindromeShouldReturnFalse()
    {
        self::assertFalse($this->checker->check("not a palindrome"));
    }

    public function testGivenrace_A_man_a_plan_a_canal_PanamaShouldReturnTrue()
    {
        self::assertTrue($this->checker->check("A man, a plan, a canal. Panama"));
    }






}
