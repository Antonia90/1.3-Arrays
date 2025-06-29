<?php
declare(strict_types=1);

$numbers = [2, 4, 3, 6];

$cube = array_map(fn(int $x): int => pow($x, 3), $numbers);

echo "<pre>";
print_r($cube);
echo "</pre>";