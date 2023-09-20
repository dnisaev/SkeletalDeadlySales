<?php

function swap(&$a, &$b) {
  
  $c = $a;
  $a = $b;  
  $b = $c; 
  
}

$a = 1;
$b = 9;

echo $a;
echo $b;
print_r("\n");

swap($a, $b);

print_r("\n");
echo $a;
echo $b;