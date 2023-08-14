<?php

$testArray = [ 0, 1, 2, 3, 4, 5 ];

# перезапишет файл, если он существует, в противном случае - создаст такой файл и запишет в него данные
file_put_contents('write-example.txt', $testArray);

# чтобы функция не перезаписывала файл, а добавляла данные в конец - нужно добавить третим параметром константу FILE_APPEND
file_put_contents('write-example.txt', PHP_EOL . file_get_contents('./example.txt') . PHP_EOL, FILE_APPEND);

# также можно воспользоваться функцией fwrite для записи контента в файл, но в отличие от file_put_contents, fwrite умеет записывать только текстовые строки, но позволяет задачть размер записываемого блока
