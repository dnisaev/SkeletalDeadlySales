<?php

function convertText($string) {
  
  $isFirstCharUpper = $string[0] === strtoupper($string[0]);
  $revertString = strrev($string);

  return $isFirstCharUpper ? $string : "$revertString — is it look something wrong, right? Because i need the first letter is uppercase you dam ass!";   
};

echo convertText("Hello, World!\n\n"); 
echo convertText("hello, World!");