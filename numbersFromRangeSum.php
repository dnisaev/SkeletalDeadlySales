<?php

function numbersFromRangeSum($start, $finish) {

  $i = $start;
  $sum = 0;

  while ($i <= $finish) {

    print_r($i);
    print_r("\n");
  
    $sum = $sum + $i;

    $i = $i + 1;
  };

  return $sum;
};

var_dump(numbersFromRangeSum(5, 10));