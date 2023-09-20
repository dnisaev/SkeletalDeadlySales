<?php

function reverseStr($str) {

  $i = 0;
  $reverse = '';

  while ($i < strlen($str)) {
    
    $reverse = "{$str[$i]}{$reverse}";
    
    $i = $i + 1;
  };
  return $reverse;
};

echo reverseStr("Polina");