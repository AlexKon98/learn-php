<?php

$a = 2;
$b = 2;
$c = 0;

if ($a < $b) {
    $c = 1;
} elseif ($a == $b) {
    $c = 2;
} else {
    $c = 5;
}

var_dump($c);