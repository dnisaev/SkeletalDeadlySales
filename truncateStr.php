<?php

function truncateStr($text, $showSymbolCount) {
  
  return substr($text, 0, $showSymbolCount) . "...";
}

print_r(truncateStr('Replit', 4));