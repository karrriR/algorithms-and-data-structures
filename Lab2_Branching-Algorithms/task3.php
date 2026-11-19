<?php
/*
На плоскости расположены три точки: A, B, C. 
Определить, какая из двух последних точек (B или C) расположена ближе к A, и вывести эту точку и ее расстояние от точки A.
*/

// Ввод координат точки A B C
$xA = (float) readline("Введите x точки A: ");
$yA = (float) readline("Введите y точки A: ");

$xB = (float) readline("Введите x точки B: ");
$yB = (float) readline("Введите y точки B: ");

$xC = (float) readline("Введите x точки C: ");
$yC = (float) readline("Введите y точки C: ");

// Нахождение расстояния от A до B
$distanceAB = sqrt(($xB - $xA) ** 2 + ($yB - $yA) ** 2);

// Нахождение расстояния от A до C
$distanceAC = sqrt(($xC - $xA) ** 2 + ($yC - $yA) ** 2);

if ($distanceAB < $distanceAC) {
    echo "Точка B ближе к точке A.\n";
    echo "Расстояние: $distanceAB\n";
} elseif ($distanceAC < $distanceAB) {
    echo "Точка C ближе к точке A.\n";
    echo "Расстояние: $distanceAC\n";
} else {
    echo "Точки B и C находятся на одинаковом расстоянии от A.\n";
    echo "Расстояние: $distanceAB\n";
}