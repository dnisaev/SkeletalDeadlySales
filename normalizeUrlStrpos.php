<?php

function normalizeUrl($url) {

  $findHTTPS = strpos($url, "https://");
  $findHTTP = strpos($url, "http://");

  if ($findHTTPS !== false) {
      
    $url = "https://" . substr($url, 8);
    
  } elseif ($findHTTP !== false) {
    
    $url = "https://" . substr($url, 7);
    
  } else {
    
    $url = "https://{$url}";
    
  }
  
return $url;
}

// echo normalizeUrl("https://yandex.ru\n\n");
// echo normalizeUrl("http://yandex.ru\n\n");
// echo normalizeUrl("yandex.ru");

function normalizeUrl($url)
{
    if (strpos($url, 'http://') === 0) {
        $domain = substr($url, 7);
    } elseif (strpos($url, 'https://') === 0) {
        $domain = substr($url, 8);
    } else {
        $domain = $url;
    }

    return "https://{$domain}";
}

echo normalizeUrl("https://yandex.ru\n\n");
echo normalizeUrl("http://yandex.ru\n\n");
echo normalizeUrl("yandex.ru");