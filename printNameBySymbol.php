<?php

function printNameBySymbol($name) {
    
  $i = 0;

  while ($i < strlen($name)) {

   print_r("$name[$i]\n");
   $i = $i + 1;
    
  }
};

$name = 'Alisa';

printNameBySymbol($name);