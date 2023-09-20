<?php

function getCurrentYear() {
 
  $currentDate = date('d-m-Y');

  $trimDayAndMonthNumber = 4;
  
  $showOnlyYear = substr($currentDate, - $trimDayAndMonthNumber, $trimDayAndMonthNumber);
  
  return (int) $showOnlyYear;
}

echo getCurrentYear();