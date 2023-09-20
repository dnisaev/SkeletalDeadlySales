<?php

function sumOfSeries($start, $end){
  
  $result = 0;
  
    for ($i = $start; $i <= $end; $i += 1) {
      $result += $i;
    };
  return $result;
};
var_dump(sumOfSeries(1, 5));