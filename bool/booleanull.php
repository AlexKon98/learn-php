<?php

$a = 4;
$b = 5;

$c = $a > $b ? 1 : ($a > 3 ? 4 : 5);

var_dump($c);

$x = null;

$y = $x ?? 10;

var_dump($y);

$c = 100;
$d = $c ?? $x ?? 'abc';

var_dump($d);