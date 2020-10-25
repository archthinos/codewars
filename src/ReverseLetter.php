<?php

// Given a string str, reverse it omitting all non-alphabetic characters.

// Example
// For str = "krishan", the output should be "nahsirk".

// For str = "ultr53o?n", the output should be "nortlu".

// Input/Output
// [input] string str

// A string consists of lowercase latin letters, digits and symbols.

// [output] a string

namespace App;

class ReverseLetter
{
    public function reverseLetter($str)
    {
        //$str = preg_match_all('/[a-z|A-Z]/', "", $str);
        return strrev(preg_replace("/[^a-zA-Z]/", "", $str));
    }
}
$test = new ReverseLetter();
var_dump($test->reverseLetter("n?o35rtlu"));
