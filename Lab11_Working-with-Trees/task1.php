<?php
/*
Работа с деревьями - реализовать обход дерева
*/

function insert($node, $value)
{
    // если пустое место - создаёт новый узел
    if ($node === null) {
        return ['value' => $value, 'left' => null, 'right' => null];
    }

    // числа меньше отправляем влево, остальные — вправо.
    if ($value < $node['value']) {
        $node['left'] = insert($node['left'], $value);
    } else {
        $node['right'] = insert($node['right'], $value);
    }

    // возвращаем узел с обновлённой веткой
    return $node;
}

function search($node, $value)
{
    // проход по дереву, пока не найдет число или не дойдём до пустой ветки
    while ($node !== null) {
        if ($node['value'] === $value) {
            return true;
        }

        if ($value < $node['value']) {
            $node = $node['left'];
        } else {
            $node = $node['right'];
        }
    }

    return false;
}

function walk($node)
{
    // если ветка пустая, то без вывода
    if ($node === null) {
        return;
    }

    walk($node['left']);        // обход левой ветки
    echo $node['value'] . ' ';  // вывод числа в текущем узле
    walk($node['right']);       // обход правой ветки
}

$numbers = [50, 30, 20, 40, 70, 60, 80]; //исходный массив
$tree = null; // нет корня

// цикл для вставки массива в дерево
foreach ($numbers as $value) {
    $tree = insert($tree, $value);
}

if (search($tree, 60)) {
    echo "Элемент найден\n";
} else {
    echo "Элемент не найден\n";
}

echo "Обход дерева: ";
walk($tree);
echo "\n";