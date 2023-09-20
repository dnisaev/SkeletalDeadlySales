<?php

namespace IsPalindromeRequire\IsPalindrome;

require_once 'isPalindromeRequire/reverseStr.php'; 
  
use function IsPalindromeRequire\ReverseStr\reverseString as reverse;

function isPalindrome($str){  

  if ($str === reverse($str)) {
    $palindrome = true;
  } else {
    $palindrome = false;
  };

  return $palindrome;
}
