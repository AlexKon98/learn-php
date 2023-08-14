<?php

$list[0] = 'Овощи';
$list[1] = 'Фрукты';
$list[2] = 'Ягоды';
// var_dump($list);

# Автоматически присваивается индекс каждому элементу
$list1[] = 'a';
$list1[] = 'b';
$list1[] = 'c';
// echo $list1[1];

# Ассоциативный массив - доступ к элементам по названию ключа а не по их индексу
$list2['vegetables'] = 'Овощи';
$list2['fruits'] = 'Фрукты';
$list2['berries'] = 'Ягоды';
// echo $list2['fruits'];

# Аналогичная запись обычного массива
$list3 = [1, 2, 3, 4];
// echo $list3[2];

# Аналогичная запись ассоциативного массива
$list4 = [
    'first' => 1,
    'second' => 2,
    'third' => 3,
];
// echo $list4['second'];

# функции sizeOf() и count() работают одинаково, вычисляя размер массива
$a = sizeOf($list3);
// var_dump($a);

$b = count($list4);
// var_dump($b);

$str = 'Hello world';
$newList = explode(' ', $str);
// var_dump($newList);

# Если нет повторяющихся подстрок, то вся строка станет одним элементом массива
$listNew = explode('!', $str);
// var_dump($listNew);

# implode() - объединяет элементы массива в строку по указанной подстроке
$lastList = [1, 2, 4, 5, 3];
$lastStr = implode(' ', $lastList);
// var_dump($lastStr);
