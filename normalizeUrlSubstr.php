<?php

function normalizeUrl($url) {

  $checkHTTPS = substr($url, 0, 8);
  $checkHTTP = substr($url, 0, 7);

  if ($checkHTTPS === "https://") {
      
    $url = $url;
    
  } elseif ($checkHTTP === "http://") {
    
    $url = "https://" . substr($url, 7);
    
  } else {
    
    $url = "https://{$url}";
    
  }
  
return $url;
}

echo normalizeUrl("https://yandex.ru\n\n");
echo normalizeUrl("http://yandex.ru\n\n");
echo normalizeUrl("yandex.ru");