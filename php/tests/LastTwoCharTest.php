<?php
namespace App;

use PHPUnit\Framework\TestCase;
use App\LastTwoChar;

class LastTwoCharTest extends TestCase
{
    public function testFixedTests()
    {
        $last = new LastTwoChar();
        
        $this->assertEquals(true, $last->solution("samurai", "ai"));
        $this->assertEquals(false, $last->solution("sumo", "omo"));
        $this->assertEquals(true, $last->solution("ninja", "ja"));
        $this->assertEquals(true, $last->solution("sensei", "i"));
        $this->assertEquals(false, $last->solution("samurai", "ra"));
        $this->assertEquals(false, $last->solution("abc", "abcd"));
        $this->assertEquals(true, $last->solution("abc", "abc"));
        $this->assertEquals(true, $last->solution("abcabc", "bc"));
        $this->assertEquals(false, $last->solution('ails', 'fails'));
        $this->assertEquals(true, $last->solution('fails', 'ails'));
        $this->assertEquals(false, $last->solution('this', 'fails'));
        $this->assertEquals(true, $last->solution('yes this will pass', ''));
        $this->assertEquals(false, $last->solution('this will not pass', '`^$<>()[]*|'));
        $this->assertEquals(false, $last->solution("abc\n", 'abc'), 'Watch out for \n in the end');
    }
}
