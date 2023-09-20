<?php

function isPalindrome($text) {

  $result = '';

  for ($i = 0; $i < mb_strlen($text); $i += 1)  {

    $char = mb_substr($text, $i, 1);

    $result = "{$char}{$result}";

    print_r($result);
    print_r("\n");
    print_r($i);
    print_r("\n");

    if ($result === $text) {
      $palindrome = true;
    } else {
      $palindrome = false;
    };

  }  
  return $palindrome;
}

$text = "шалашалаш";
var_dump(isPalindrome($text));
// echo "\n";
// echo mb_substr($text, $i);
// echo "\n";
//echo $text[0];