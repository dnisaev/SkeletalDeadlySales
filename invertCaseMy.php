<?php

function invertCase($text) {

  $result = '';
  
  $textUpper = strtoupper($text);
  $textLower = strtolower($text);

  for ($i = 0; $i <= strlen($text); $i += 1) {

    
    if ($i % 2 === 0) {
      
    $result = "{$result}{$textUpper[$i]}";

    } else { $result = "{$result}{$textLower[$i]}";
      
    };
  };

  return $result;

};

echo invertCase("hello world!");
//var_dump(invertCase("Привет!"));