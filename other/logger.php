<?php

    function setInterval($f, $milliseconds) {
        $seconds = (int)$milliseconds/1000;
        $a = 0;
        while($a != 10)
        {
            $a = $a + 1;
            $f();
            sleep($seconds);
        }
};

setInterval(function(){
    echo date('r') . '- some text + random number' . rand() . "\n";
}, 1000);