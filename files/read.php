<?php

# ссылка на файл с ключом (второй аргумент)
$fp = fopen('../example.txt', 'r');

#считывание символов файла по 1 символу
while (!feof($fp)) {
  $symbol = fread($fp, 1);
  echo $symbol;
}

// #filePart = fread($fp, 100);

echo PHP_EOL;