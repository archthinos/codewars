<?php
namespace App;

class SeriesSum
{
    public function series_sum($n)
    {
        $mod = 1;
        $sum = 0;

        for ($i=1;$i<=$n;$i++) {
            $sum += 1/$mod;
            $mod = $mod+3;
        };
        return number_format($sum, 2);
    }
}
