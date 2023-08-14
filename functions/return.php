<?php

function isValidNumber($n) {
  if (is_numeric($n)) {
    return true;
  } else {
    return false;
  }
}

function displayRes($n, $valid) {
  if ($valid) {
    if ($n % 3 === 0) {
      echo 'Число ' . $n . ' делится на 3' . PHP_EOL;
    } else {
      echo 'Число ' . $n . ' не делится на 3' . PHP_EOL;
    }
  } else {
    echo 'Значение не число' . PHP_EOL;
  }
}

$str = 'уыпва0';
displayRes($str, isValidNumber($str));

for ($i = 1; $i <= 100; $i++) {
  displayRes($i, isValidNumber($i));
}