<?php

namespace IsPalindromeRequire\ReverseStr;

function reverseString($str)
{
    $index = strlen($str);
    $reversedString = '';

    while ($index >= 0) {

        $currentChar = $str[$index];
        $reversedString = "{$reversedString}{$currentChar}";
        $index = $index - 1;
        
        print_r($reversedString);
        print_r("\n");
        print_r($index);
    }

    return $reversedString;
}