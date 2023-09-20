<?php

function isArgumentsForMySubstrCorrect($str, $index, $length) {
    
  if ($length < 0) {
    $result = false;
  }
  elseif ($index < 0) {
     $result = false;
  }
  elseif ($index > strlen($str) - 1) {
      $result = false;        
  }
  elseif ($length + $index > strlen($str)) {
          $result = false;
  }
  else {
    $result = true;
  };

  return $result;
};

$str = 'Sansa Stark';

var_dump(isArgumentsForMySubstrCorrect($str, 10, 1));
echo substr($str, 10, 1);

// function isArgumentsForMySubstrCorrect($str, $index, $length) {
    
//   if ($length < 0) {
//     return false;
//   }  elseif ($index < 0) {
//       return false;
//   }  elseif ($index >= strlen($str)) {
//       return false;        
//   }  elseif ($length + $index > strlen($str)) {
//       return false;
//   };
  
//   return true;
// };

// $str = 'Sansa Stark';

// var_dump(isArgumentsForMySubstrCorrect($str, 10, 1));
// echo substr($str, 10, 1);