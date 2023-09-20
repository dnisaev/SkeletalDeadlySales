<?php

function getHiddenCardSimple($cardNumber, $starsCount = 4) {
  
  return str_repeat("*", $starsCount) . substr($cardNumber, -4, 4);
}

echo getHiddenCardSimple(5536913768866531);