<?php
namespace App;

use PHPUnit\Framework\TestCase;
use App\RowWeights;

class RowWeightsTest extends TestCase
{
    public function testFixedTests()
    {
        $test = new RowWeights();
        $this->assertEquals([80, 0], $test->rowWeights([80]));
        $this->assertEquals([100, 50], $test->rowWeights([100, 50]));
        $this->assertEquals([120, 140], $test->rowWeights([50, 60, 70, 80]));
        $this->assertEquals([62, 27], $test->rowWeights([13, 27, 49]));
        $this->assertEquals([236, 92], $test->rowWeights([70, 58, 75, 34, 91]));
        $this->assertEquals([211, 164], $test->rowWeights([29, 83, 67, 53, 19, 28, 96]));
        $this->assertEquals([0, 0], $test->rowWeights([0]));
        $this->assertEquals([150, 151], $test->rowWeights([100, 51, 50, 100]));
        $this->assertEquals([207, 235], $test->rowWeights([39, 84, 74, 18, 59, 72, 35, 61]));
        $this->assertEquals([0, 1], $test->rowWeights([0, 1, 0]));
    }
}
