<?php
namespace App;

use PHPUnit\Framework\TestCase;
use App\HighAndLow;

class HighAndLowTest extends TestCase
{
    public function test_with_sort_array()
    {
        $num = new HighAndLow();
        $this->assertEquals("42 -9", $num->highAndLow("8 3 -5 42 -1 0 0 -9 4 7 4 -4"));
    }
    public function test_with_min_max()
    {
        $num = new HighAndLow();
        $this->assertEquals("42 -9", $num->highAndLowWithMinMax("8 3 -5 42 -1 0 0 -9 4 7 4 -4"));
    }
}
