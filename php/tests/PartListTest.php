<?php
namespace App;

use PHPUnit\Framework\TestCase;
use App\PartList;

class PartListTest extends TestCase
{
    private function revTest($actual, $expected)
    {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics()
    {
        $part = new PartList();

        $this->revTest(
            $part->partlist(["I", "wish", "I", "hadn't", "come"]),
            [["I", "wish I hadn't come"], ["I wish", "I hadn't come"], ["I wish I", "hadn't come"], ["I wish I hadn't", "come"]]
        );
        $this->revTest(
            $part->partlist(["cdIw", "tzIy", "xDu", "rThG"]),
            [["cdIw", "tzIy xDu rThG"], ["cdIw tzIy", "xDu rThG"], ["cdIw tzIy xDu", "rThG"]]
        );
        $this->revTest(
            $part->partlist(["vJQ", "anj", "mQDq", "sOZ"]),
            [["vJQ", "anj mQDq sOZ"], ["vJQ anj", "mQDq sOZ"], ["vJQ anj mQDq", "sOZ"]]
        );
    }
}
