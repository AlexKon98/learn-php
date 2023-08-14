<?php

function displayString(string $str, int $n) {
  for ($i = 0; $i < $n; $i++) {
    echo $str . PHP_EOL;
  }
}

// displayString('test string', 3);

// displayRes(3, 'test str');
# данный вызов функции не сработает, т.к. переданные параметры не соответствуют их типам

function displayNum(int $n) : int {
  echo $n . PHP_EOL;
  return $n;
}


// displayNum(3);

// displayNum('test');
# Вызов не сработает, т.к. некоректно передан тип возвращаемого значения


// function (...params) : void {}
# Если передать тип возвращаемого значения void - то функция не вернет ничего