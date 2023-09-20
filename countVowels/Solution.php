<?php

namespace App\Solution;

require_once 'countVowels/Symbols.php';

use function App\Symbols\isVowel;

function countVowels($char){

  $sum = 0;

  for ($i = 0; $i < strlen($char); $i += 1) {

    if (isVowel($char[$i]) === true) {
        $sum += 1;
    } else {
      $sum += 0;
      }
  }
  return $sum;
}

$char = "Alisa";

echo countVowels($char);