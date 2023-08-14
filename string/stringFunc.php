<?php

$str = "Hello world!";
$word = substr($str, 0, 5);
// echo($word);
$part = substr($str, 6);
// echo($part);
$roll = substr($str, -6);
// echo($roll);
$last = substr($str, 6, -3);
// echo($last);

// находит индекс первого совпадения указанной подстроки в строке (чувствителен к регистру)
// Вернет false, если нужная последовательность не будет обнаружена
$pos = strpos($str, 'world');
// var_dump($pos);

// Так же вместо строк для второго и третьего параметра можно использовать переменные
$newStr = 'Hello world! Hello';
$newPos = strpos($newStr, 'Hello', 1);
$falsePos = strpos($newStr, 'World', 0);
// var_dump($falsePos);
// var_dump($newPos);

// Аналог strpos, но не чувствительная регистру
$index = stripos($str, 'World');
$falseIndex = stripos($str, 'Norld');
// var_dump($index);

// Заменить в строке все повторения на указанную строку(чувствителен к регистру)
// 4м параметром можно передать нужное количество замен
$replace = 'Hi';
$str1 = str_replace("Hello", $replace, $newStr);
var_dump($str1);

// Аналог str_replace, но не чувствителен к регистру
$str2 = str_ireplace("Hello", $replace, $str);
// var_dump($str2);
// strtolower($str), strtoupper($str) - меняют регистр указанных строк

// trim($str) - очистка строк от пробельных символов и символов табуляции с обоих концов строк
// ltrim($str), rtrim($str) - очищают строку только с конца или только с начала, по аналогу с trim()