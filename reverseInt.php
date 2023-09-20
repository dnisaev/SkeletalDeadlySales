<?php

namespace ReverseInt;

function reverse($num) {  
  
  $reverse = strrev($num);

  if ($num < 0) {
    
    return (int) "-{$reverse}";
    
  } else {
    
    return (int) $reverse;
    
  }   
}