<?php

function mySubstr($text, $length) {

  $str = '';
  $i = 0;

  while ($i < $length) {

    $str = "{$str}{$text[$i]}";

    $i = $i + 1;
    
  };

  return "{$str}";
};

echo mySubstr("I love my wife", 8);