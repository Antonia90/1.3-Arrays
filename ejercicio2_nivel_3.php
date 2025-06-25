<?php

declare(strict_types=1);

function isEvenWord(string $word): bool
{
    return strlen($word) % 2 == 0;
}

$words = ["gato", "pato", "perro", "oso"];

$evenWords = array_filter($words, 'isEvenWord');

echo "<pre>";
print_r($evenWords);
echo "</pre>";
