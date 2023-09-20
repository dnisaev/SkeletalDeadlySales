<?php

function getCustomDate($time) {
  
  return date("d/m/Y", $time);
  
};

$time = 1532435204;
  
echo getCustomDate($time);


// function getCustomDate() {

//   $currentTime = time();

//   return date("d/m/Y", $currentTime);

// };

// echo getCustomDate();