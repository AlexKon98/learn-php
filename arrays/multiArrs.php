<?php

$list1 = [1,2,3];
$list2 = [4,5,6];

# многомерный массив - массив, элементами которого являются другие массивы
$list = [
    0 => $list1,
    1 => $list2,
    2 => [7,8,9],
];

// var_dump($list[2][0]);

$cities = [
    'russia' => [
        'msk' => 'Москва',
        'spb' => 'Санкт-Петербург',
    ],
    'germany' => [
        'brl' => 'Berlin',
    ],
];

// var_dump($cities['russia']['spb']);