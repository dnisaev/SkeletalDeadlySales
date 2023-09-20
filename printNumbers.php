<?php

function printNumbers($firstNumber) {

  $i = $firstNumber;
  
  while ($i <= $firstNumber) {
    print_r($i);
    print_r("\n");
    $i = $i - 1;
        
    switch ($i) {
      case 0:
        return "finished!";
    };
  };
};

echo printNumbers(10);