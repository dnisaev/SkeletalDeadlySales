<?php

function xtask($word){

  $string = "";
  $sum = 1;
  
  for ($i = 0; $i < strlen($word); $i += 1){       
    if ($word[$i] === $word[$i + 1]) {
      $sum += 1;
    } else {      
      $string = "{$string}{$word[$i]}{$sum}";      
      $sum = 1;         
    };
  };
  return $string;
};

$word = "aqaabbsmm44111144mmffffaaaffppp";
echo xtask($word);