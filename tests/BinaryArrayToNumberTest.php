<?php
namespace App;

use PHPUnit\Framework\TestCase;
use App\BinaryArrayToNumber;

class BinaryArrayToNumberTest extends TestCase
{
    public function binaryArrayToNumberWithoutBindecTest()
    {
        $test = new BinaryArrayToNumber();
        $this->assertEquals(1, $test->binaryArrayToNumberWithoutBindec([0,0,0,1]));
        $this->assertEquals(2, $test->binaryArrayToNumberWithoutBindec([0,0,1,0]));
        $this->assertEquals(15, $test->binaryArrayToNumberWithoutBindec([1,1,1,1]));
        $this->assertEquals(6, $test->binaryArrayToNumberWithoutBindec([0,1,1,0]));
    }

    public function binaryArrayToNumberWithBindecTest()
    {
        $test = new BinaryArrayToNumber();
        $this->assertEquals(1, $test->binaryArrayToNumberWithBindec([0,0,0,1]));
        $this->assertEquals(2, $test->binaryArrayToNumberWithBindec([0,0,1,0]));
        $this->assertEquals(15, $test->binaryArrayToNumberWithBindec([1,1,1,1]));
        $this->assertEquals(6, $test->binaryArrayToNumberWithBindec([0,1,1,0]));
    }
}
