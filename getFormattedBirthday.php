<?php

function getFormattedBirthday($day, $month, $year) {

  $day = sprintf("%02d", $day);
  $month = sprintf("%02d", $month);

  $formattedBirthday = $day . "-" . $month . "-" . $year;

return $formattedBirthday;
}

echo getFormattedBirthday(9, 9, 1988);