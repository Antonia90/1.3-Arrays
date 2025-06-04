<?php
//Ejercicio 1
echo "<h3>Ejercicio 1</h3>";
$numbers = [];
array_push($numbers, 1, 2, 3, 4, 5);

foreach ($numbers as $x) {
    echo "$x <br>";
}

//Ejercicio 2
echo "<h3>Ejercicio 2</h3>";
$x = array(10, 20, 30, 40, 50, 60);
echo count($x)  . "<br>";
array_splice($x, 1, 1);
echo count($x) . "<br>";
var_dump($x);

//Ejercicio 3
echo "<h3>Ejercicio 3</h3>";
$list = array("hola", "Php", "Html");

function hasSameCharacters(array $words, string $character): bool
{

    $character = strtolower($character);
    foreach ($words as $word) {
        if (!str_contains(strtolower($word), $character)) {
            return false;
        }
    }
    return true;
}

if (hasSameCharacters($list, "h")) {
    echo "true <br>";
} else {
    echo "false <br>";
}


//Ejercicio 4
echo "<h3>Ejercicio 4</h3>";

$personalInfo = ["Nombre" => "Antonia", "Edad" => 34, "Email" => "antominnucci@gmail.com", "Comida Favorita" => "gnocchi"];
//var_dump($personalInfo);
foreach ($personalInfo as $info => $data) {
    echo "$info: $data <br>";
}
