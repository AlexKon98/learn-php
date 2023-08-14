<?php

$content = PHP_EOL . file_get_contents('example.txt');
$fp = fopen('example.txt', 'a+');

fwrite($fp, $content);
# при использовании fwrite, привязанный файл блокируется для чтения, для того чтобы сделать файл снова доступным - нужно воспользоваться функцией fclose
fclose($fp);