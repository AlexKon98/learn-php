<?php

class Ticker {
  private $string;

  public function __set($name, $value)
  {
    if ($name == 'string') {
      if (stripos($value, '<script>') !== false) {
        echo 'Строка содержит инъекцию кода!' . PHP_EOL;
        return;
      } else {
        $this->string = $value;
      }
    }
  }

  public function __get($name)
  {
    if ($name == 'string') {
      return strtoupper($this->string);
    }
  }
}

$ticker = new Ticker();
$ticker->string = 'Корректное значение строки';
echo $ticker->string . PHP_EOL;
