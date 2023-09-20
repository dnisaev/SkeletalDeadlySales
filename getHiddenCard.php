<?php

function getHiddenCard($cardNumber) {
  
  $lengthCardNumber = strlen($cardNumber);
  $visiblePartCardNumber = 12;
  
  $starsCount = $lengthCardNumber - $visiblePartCardNumber;
  
  return str_repeat("*", $starsCount) . substr($cardNumber, - $visiblePartCardNumber, $visiblePartCardNumber);
}

echo getHiddenCard(5536913768866531);