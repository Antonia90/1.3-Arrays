<?php
$alumnos = [
    "Carlo" => [8, 2, 9, 4, 7],
    "Marta" => [6, 10, 8, 5, 10],
    "Luisa" => [9, 10, 9, 8, 9],
];
function calculateStudentAverage(array $notes): float
{
    return array_sum($notes) / count($notes);
}

function showStudentAverage(array $course): array
{
    $totalNotes = 0;
    $noteQuantity = 0;

    echo "<h3>Promedio por alumno:</h3>";
    foreach ($course as $name => $notes) {
        $average = calculateStudentAverage($notes);
        echo "$name: " . number_format($average, 2) . "<br>";

        $totalNotes += array_sum($notes);
        $noteQuantity += count($notes);
    }

    return [$totalNotes, $noteQuantity];
}

function showCourseAverage(array $course): void
{
    list($totalNotes, $noteQuantity) = showStudentAverage($course);
    $courseAverage = $totalNotes / $noteQuantity;

    echo "<h3>Promedio de la clase:</h3>" . number_format($courseAverage, 2);
}


showStudentAverage($alumnos);
