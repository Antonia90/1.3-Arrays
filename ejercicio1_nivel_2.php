<?php

//**Nivel 2**
//Ejercicio 1

$array1 = [];
$array2 = [];

array_push($array1, 2, 3.5, 6, 8.1, 10);
array_push($array2, 3, 6, 8.5, 9, 10);

$arrayCommonNumbers = [];

$arrayCommonNumbers = array_intersect($array1, $array2);

$bothArrays = array_merge($array1, $array2);

echo "<pre>";
echo "Números en común:\n";
print_r($arrayCommonNumbers);

echo "Ambos arrays:\n";
print_r($bothArrays);
echo "<pre>";
