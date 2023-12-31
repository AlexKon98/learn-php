<?php

# для передачи простой строки в качестве ответа сервера достаточно использовать встроенные в php методы - echo или print;
// echo 'header-test';

# для формирования заголовков ответа сервера используется функция header();
// header(string $header, bool $replace = true, int $response_code = 0): void

// 1й параметр:
// Строка заголовка. - она может быть двух типов: header("HTTP/1.1 404 Not Found"); или header("Location: http://www.example.com/");

// 2й параметр:
// Необязательный параметр replace определяет, надо ли заменять предыдущий аналогичный заголовок или заголовок того же типа. По умолчанию заголовок будет заменён, но если передать false, можно задать несколько однотипных заголовков. То есть указывает, должен ли header замещать предыдущий аналогичную header, или нужно добавить второй header того же самого типа.

// 3й параметр:
// Принудительно задаёт код ответа HTTP. Следует учитывать, что это будет работать, только если строка header не является пустой

# Если не удалось запланировать отправку заголовка, header() выдаёт ошибку уровня E_WARNING.

header('location: https://google.com', false, 301);
header(':', false, 403);

# если необходимо отправить json, ещ следует использовать директиву Content-type:
header('Content-type: Application/json', true, 200);