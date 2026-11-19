<?php 
/*
5.	Даны два ненулевых числа. Найти сумму, разность, произведение и частное их модулей.
*/

$a = (float) readline("Введите число a: ");
while ($a == 0) {
    echo "Число не должно быть нулём!\n";
    $a = (float) readline("Введите число a: ");
}

$b = (float) readline("Введите число b: ");
while ($b == 0) {
    echo "Число не должно быть нулём!\n";
    $b = (float) readline("Введите число b: ");
}

// Получение модулей числа
$aAbs = abs($a);
$bAbs = abs($b);

// Основные дейтсвия
$sum = $aAbs + $bAbs;
$diff = $aAbs - $bAbs;
$prod = $aAbs * $bAbs;
$div = $aAbs / $bAbs;

echo "Сумма = $sum\n";
echo "Разность = $diff\n";
echo "Произведение = $prod\n";
echo "Частное = $div\n";