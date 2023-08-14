<?php

$a = fn() => 'это стрелочная функция';

var_dump($a());

$y = 1;
$newFn = fn($x) => $x + $y;

var_dump($newFn());
