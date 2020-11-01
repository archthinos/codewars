<?php
namespace App;

class PartList
{
    public function partlist($arr)
    {
        for ($i=1;$i<count($arr);$i++) {
            $array[] = [
                implode(' ', array_slice($arr, 0, $i)),
                implode(' ', array_slice($arr, $i)),
            ];
        }
        return $array;
    }
}
