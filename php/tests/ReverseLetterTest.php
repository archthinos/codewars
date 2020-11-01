<?php
namespace App;

use PHPUnit\Framework\TestCase;
use App\ReverseLetter;

class ReverseLetterTest extends TestCase
{
    public function testThatSomethingShouldHappen()
    {
        $test = new ReverseLetter();
        $this->assertEquals("krishan", $test->reverseLetter("nahsirk"));
        $this->assertEquals("nortlu", $test->reverseLetter("ultr53o?n"));
    }
}
