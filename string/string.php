<?php

$str1 = 'Hello world!';
$str2 = 'Hello \'world!\''; # в одинарных кавычках не работают спецсимволы
$str3 = 'Hello \r World \t !'; # спецсимволы не работают в одинарных кавычках

$str4 = <<<EOD
Hello world, 
how are you? "fine"
Good here\doc-synt \n
EOD; # нет надобности экранироать кавычки в heredoc и спецсимволы будут отрабатывать как нужно
echo $str1;
echo $str2;
echo $str3;
echo $str4;

$str5 = 'hello ';
$str6 = "world \n"; # в двойных кавычках работают спецсимволы
$str7 =  $str5 . $str6; # для сложения(конкатенации) строк в php используется точка
echo $str7;

$str8 = 'hello';
$str8 .= " world!\n"; # на подобие += для чисел
echo $str8;

$newStr = 'new Str';
$newStrLength = strlen($newStr);
# возвращает длину строки (но не латинские символы увеличивают длину строки не на 1 а на 2(1 символ - 1 байт, но нелатинские символы кодируются 2 байтами(мультибайтовая кодировка)))
var_dump($newStr);
var_dump($newStrLength);

$newStr1 = 'Привет';
$newStrLength1 = mb_strlen($newStr1);
var_dump($newStr1);
var_dump($newStrLength1);

# mb_strlen не работает, нужные библотеки устанавливаются через линукс-команды(multibyte)
$mbhello = 'Привет мир!';
$mbstr = mb_strlen($mbhello);
var_dump($mbstr);

# Вставка переменной в строку через интерполяцию
$a = 24;
$str = "\nI'm $a years old";
echo $str;

# вывод символа по индексу
$strchar = $str[8];
var_dump($strchar);

# вывод символа по вычисляемому индексу
$str0 = $str[strlen($str) - 1];
var_dump($str0);

# Замена символа в строке
$str[strlen($str) - 1] = 'D';
echo $str;