<?php

function getLastChar($text) {
  
  return $text[strlen($text) - 1];
}

echo getLastChar('function');