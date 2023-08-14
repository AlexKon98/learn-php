<?php

$fp = fopen('../example.txt', 'r');

# выводит кол-во символов в файле
$size = filesize('../example.txt');
# передача количества символов в файле для того чтобы получить весь контент сразу, а не по 1 символу
$content = fread($fp, $size);
# но вместо этого способа лучше использовать функцию file_get_contents
echo $content . PHP_EOL;
