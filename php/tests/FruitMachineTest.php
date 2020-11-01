<?php
namespace App;

use PHPUnit\Framework\TestCase;
use App\FruitMachine;

class FruitMachineTest extends TestCase
{
    public function testExample()
    {
        $test = new FruitMachine();

        $reel = ["Wild","Star","Bell","Shell","Seven","Cherry","Bar","King","Queen","Jack"];
        $spin = [0,0,0];
        $this->assertEquals(100, $test->fruit([$reel,$reel,$reel], $spin), "Should return: '100'");
        
        $reel1 = ["Wild","Star","Bell","Shell","Seven","Cherry","Bar","King","Queen","Jack"];
        $reel2 = ["Bar", "Wild", "Queen", "Bell", "King", "Seven", "Cherry", "Jack", "Star", "Shell"];
        $reel3 = ["Bell", "King", "Wild", "Bar", "Seven", "Jack", "Shell", "Cherry", "Queen", "Star"];
        $spin = [5,4,3];
        $this->assertEquals(0, $test->fruit([$reel1,$reel2,$reel3], $spin), "Should return: '0'");
        
        $reel1 = ["King", "Cherry", "Bar", "Jack", "Seven", "Queen", "Star", "Shell", "Bell", "Wild"];
        $reel2 = ["Bell", "Seven", "Jack", "Queen", "Bar", "Star", "Shell", "Wild", "Cherry", "King"];
        $reel3 = ["Wild", "King", "Queen", "Seven", "Star", "Bar", "Shell", "Cherry", "Jack", "Bell"];
        $spin = [0,0,1];
        $this->assertEquals(3, $test->fruit([$reel1,$reel2,$reel3], $spin), "Should return: '3'");
        
        $reel1 = ["King", "Jack", "Wild", "Bell", "Star", "Seven", "Queen", "Cherry", "Shell", "Bar"];
        $reel2 = ["Star", "Bar", "Jack", "Seven", "Queen", "Wild", "King", "Bell", "Cherry", "Shell"];
        $reel3 = ["King", "Bell", "Jack", "Shell", "Star", "Cherry", "Queen", "Bar", "Wild", "Seven"];
        $spin = [0,5,0];
    }
}
