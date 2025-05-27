<?php
//Ejercicio 1
echo "<h3>Ejercicio 1</h3>";
$numeros = [];
array_push($numeros, 1, 2, 3, 4, 5);

foreach ($numeros as $x) {
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
$cadena = array("hola", "Php", "Html");

function tienenMismosCaracteres($palabras, $caracter)
{
    $palabrasContienenCaracter = [];
    $caracter = strtolower($caracter);
    foreach ($palabras as $palabra) {
        if (str_contains(strtolower($palabra), $caracter)) {
            $palabrasContienenCaracter[] = $palabra;
        }
    }
    if (count($palabras) === count($palabrasContienenCaracter)) {
        return true;
    } else {
        return false;
    }
}

if (tienenMismosCaracteres($cadena, "h")) {
    echo "true <br>";
} else {
    echo "false <br>";
}


//Ejercicio 4
echo "<h3>Ejercicio 4</h3>";

$infoPersonal = ["Nombre" => "Antonia", "Edad" => 34, "Email" => "antominnucci@gmail.com", "Comida Favorita" => "gnocchi"];
//var_dump($infoPersonal);
foreach ($infoPersonal as $info => $data) {
    echo "$info: $data <br>";
}
