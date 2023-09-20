<?php

function convertText($string) {
  
    if ($string[0] === strtoupper($string[0])) {
      
        $string = $string;
    } 
        else {
            $string = strrev($string); 
        }
  
  return $string;
};

echo convertText("Hello, World!\n\n");
echo convertText("hello, World!");