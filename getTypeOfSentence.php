<?php

function getTypeOfSentence($sentence) {
    $lastChar = $sentence[-1];

    if ($lastChar === '!') {
        $sentenceType = 'exclamation';
    } elseif ($lastChar === '?') {
        $sentenceType = 'question';
    } else  {
        $sentenceType = 'normal';
    }

    return "Sentence is {$sentenceType}\n\n";
}

echo getTypeOfSentence("Hello");
echo getTypeOfSentence("Hello?");
echo getTypeOfSentence("Hello!");