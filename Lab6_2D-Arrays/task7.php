<?php
/*
7. Дана матрица размера M × N. Поменять местами столбцы, содержащие минимальный и максимальный элементы матрицы.
*/

$m = (int) readline("Введите количество строк M: ");
$n = (int) readline("Введите количество столбцов N: ");

$a = [];

// заполнение матрицы
for ($i = 0; $i < $m; $i++) {
    for ($j = 0; $j < $n; $j++) {
        $a[$i][$j] = rand(1, 100);
    }
}

// исходник
echo "Исходная матрица:\n";

for ($i = 0; $i < $m; $i++) {
    for ($j = 0; $j < $n; $j++) {
        echo $a[$i][$j] . "\t";
    }
    echo "\n";
}

// поиск минимального и максимального элемента
$minRow = 0;
$minIndex = 0;
$maxRow = 0;
$maxIndex = 0;

for ($i = 0; $i < $m; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($a[$i][$j] < $a[$minRow][$minIndex]) {
            $minRow = $i;
            $minIndex = $j;
        }

        if ($a[$i][$j] > $a[$maxRow][$maxIndex]) {
            $maxRow = $i;
            $maxIndex = $j;
        }
    }
}

// меняем местами столбцы
for ($i = 0; $i < $m; $i++) {
    $temp = $a[$i][$minIndex];
    $a[$i][$minIndex] = $a[$i][$maxIndex];
    $a[$i][$maxIndex] = $temp;
}

// вывод изменённой матрицу
echo "Матрица после замены столбцов:\n";

for ($i = 0; $i < $m; $i++) {
    for ($j = 0; $j < $n; $j++) {
        echo $a[$i][$j] . "\t";
    }
    echo "\n";
}
