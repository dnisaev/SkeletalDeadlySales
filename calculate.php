<?php

function calculate($sign, $numberOne, $numberTwo) {
  switch ($sign) {
    case '+':
      return $numberOne + $numberTwo;
    
    case '-':
      return $numberOne - $numberTwo;
    
    case '/':
      return $numberOne / $numberTwo;
    
    case '*':
      return $numberOne * $numberTwo;
      
    default:
      return null;
  };
};

//echo calculate('*', 15, 3);
var_dump(calculate('*', 15, 3));

function calculate($sign, $numberOne, $numberTwo) {
  switch ($sign) {
    case '+':
      $result = $numberOne + $numberTwo;
      break;    
    case '-':
      $result = $numberOne - $numberTwo;
      break;    
    case '/':
      $result = $numberOne / $numberTwo;
      break;    
    case '*':
      $result = $numberOne * $numberTwo;
      break;      
    default:
      $result = null;
  };
  return $result;
};

//echo calculate('*', 15, 3);
var_dump(calculate('$', 15, 3));