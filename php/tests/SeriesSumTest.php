<?php
namespace App;

use PHPUnit\Framework\TestCase;
use App\SeriesSum;

class SeriesSumTest extends TestCase
{
    public function test_sum()
    {
        $series = new SeriesSum();
        
        $this->assertSame('1.00', $series->series_sum(1));
        $this->assertSame('1.25', $series->series_sum(2));
        $this->assertSame('1.39', $series->series_sum(3));
        $this->assertSame('1.49', $series->series_sum(4));
    }
}
