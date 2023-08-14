<?php

class Ticker {
  private $string;

  public function setString($value)
  {
    if (stripos($value, '<script>') !== false) {
      echo 'Строка содержит инъекцию кода!' . PHP_EOL;
      return;
    } else {
      $this->string = $value;
    }
  }

  public function getString()
  {
    return strtoupper($this->string) . PHP_EOL;
  }
}

$ticker = new Ticker();
$ticker->setString('Корректное значение строки');
echo $ticker->getString();
