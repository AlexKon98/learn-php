<?php

$a = 2;
$b = 3;
$z = 4;

$a++;
$b++;
$z += 3;

var_dump($z);
var_dump($a);
var_dump($b);


// Постфикс:

$x = 2;

$y = 3 + $x++;

var_dump($y);


// Префикс:

$c = 2;

--$c;

var_dump($c);