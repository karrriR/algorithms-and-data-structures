<?php
/*
5. Бинарный поиск: Напишите функцию, которая рекурсивно выполняет бинарный поиск заданного элемента в отсортированном массиве.
*/

// Рекурсивная функция бинарного поиска
function binarySearch($arr, $target, $left, $right) {

    if ($left > $right) { // условие если элемент не найден
        return -1;
    }
    $mid = intdiv($left + $right, 2); //середина массива

    if ($arr[$mid] == $target) { // условие если элемент найден
        return $mid;
    }

    if ($target < $arr[$mid]) { // условие если искомое число меньше среднего
        return binarySearch($arr, $target, $left, $mid - 1);
    }

    return binarySearch($arr, $target, $mid + 1, $right); // условие если искомое число больше среднего
}

$arr = [1, 3, 5, 7, 9, 11, 13, 15, 17]; //отсортированный массив

// Ввод числа для поиска
$target = (int) readline("Введите число для поиска: ");

$result = binarySearch($arr, $target, 0, count($arr) - 1);

if ($result != -1) {
    echo "Элемент найден! Индекс: $result\n";
} else {
    echo "Элемент не найден.\n";
}