<?php
$alumnos = [
    "Carlo" => [8, 2, 9, 4, 7],
    "Marta" => [6, 10, 8, 5, 10],
    "Luisa" => [9, 10, 9, 8, 9],
];

function showAverages(array $course): void
{
    $totalSum = 0;
    $notesTotalQuantity = 0;
    echo "<h3>Promedio por alumno: </h3>";
    foreach ($course as $name => $notes) {
        $studentSum = array_sum($notes);
        $notesQuantity = count($notes);
        $studentAverage = $studentSum / $notesQuantity;

        echo "$name: $studentAverage<br>";
        
        $totalSum += $studentSum;
        $notesTotalQuantity += $notesQuantity;
    }
    $averageCourse = $totalSum / $notesTotalQuantity;
    echo "<h3>Promedio de la clase:</h3>" . $averageCourse;
};



showAverages($alumnos);
