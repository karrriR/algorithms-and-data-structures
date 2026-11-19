<?php
/*
7. Разложение числа на сумму простых чисел: Напишите функцию, которая рекурсивно разлагает заданное число на сумму простых чисел
*/

// Проверка, является ли число простым
function isPrime($n) {
    if ($n < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}

// Рекурсивное разложение числа на сумму простых чисел
function decompose($n, $start = 2) {

    if ($n == 0) { //условие выхода
        return true;
    }

    for ($i = $start; $i <= $n; $i++) { //перебор простых чисел
        if (isPrime($i)) {
            if (decompose($n - $i, $i)) {
                echo "$i ";
                return true;
            }
        }
    }
    return false;
}

$n = (int) readline("Введите число: ");

echo "Разложение: ";
decompose($n);
echo "\n";