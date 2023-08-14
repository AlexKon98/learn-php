<?php

# сразу получит весь контент файла
$content = file_get_contents('../example.txt');

echo $content . PHP_EOL;