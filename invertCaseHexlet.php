<?php

function invertCase($text) {

  $result = '';
  
  for ($i = 0; $i < mb_strlen($text); $i += 1) {
    
    $textUp = mb_strtoupper($text);
    $charUp = mb_substr($textUp, $i, 1);
    
    $textLow = mb_strtolower($text);    
    $charLow = mb_substr($textLow, $i, 1);

    $char = mb_substr($text, $i, 1);
    
    if ($char === $charUp) {
      
      $result = "{$result}{$charLow}";
      
    } elseif ($char === $charLow) {
      
      $result = "{$result}{$charUp}";
      
    };
      
  };    
    return $result;
};

$text = "HeLlO wOrLd!";
$textUtf = "ПрИвЕт МиР!";
echo invertCase($text);
echo "\n";
echo invertCase($textUtf);