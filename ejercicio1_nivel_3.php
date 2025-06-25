<?php
declare(strict_types=1);

function calculateCube(int $x) : int {
    return $x * $x;
}

$numbers = [2, 4, 3, 6];

$cube = array_map('calculateCube', $numbers);

echo "<pre>";
print_r($cube);
echo "</pre>";