<?php
/*
6. Обратный порядок слов: Напишите функцию, которая рекурсивно меняет порядок слов в заданной строке на обратный.
*/

function reverseWords($words) { // Рекурсивная функция изменения порядка слов

    if (count($words) <= 1) { //условия для выхода
        return $words;
    }

    $last = array_pop($words); //последнее слово

    return array_merge([$last], reverseWords($words)); //объединяет массивы в 1, последнее слово в начало массива
}


$str = readline("Введите строку: ");

$words = explode(" ", $str); // разделение строки на массив слов

$result = reverseWords($words);

echo implode(" ", $result) . "\n"; // объединение слов обратно в строку