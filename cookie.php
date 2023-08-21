<?php

# используется для записи куки:
setcookie('TestCookie', 'test', 3600);


# для получения кук используется:
echo $_COOKIE['TestCookie'];
