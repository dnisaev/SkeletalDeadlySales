<?php

function getAgeDifference($x, $y) {
  
  $ageDifference = abs($x - $y);
    
  return "The age difference is " . $ageDifference;
}

echo getAgeDifference(1988, 2023);