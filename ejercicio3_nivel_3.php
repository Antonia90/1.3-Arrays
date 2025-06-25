<?php

declare(strict_types=1);

function isPrime(int $x): bool
{
    if ($x <= 1) return false;

    for ($i = 2; $i <= sqrt($x); $i++) {
        if ($x % $i === 0) return false;
    }

    return true;
}

function sumOfPrimes(array $numbers): int
{
    return array_reduce($numbers, function (int $sum, int $currentNumber): int {
        if (isPrime($currentNumber)) {
            return $sum + $currentNumber;
        }
        return $sum;
    }, 0);
}

$numbers = [7, 5, 8, 12, 11];

echo "La suma de números primos es: " . sumOfPrimes($numbers);
