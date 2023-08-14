<?php

class CreateObj
{
  public $a = 'a', $b, $c;

  const MAX_NUMBER = 7;

  function getA() {
    return $this->a . PHP_EOL;
  }

  function counBC() {
    return $this->b + $this->c;
  }

  function changeA(string $newA) {
    $this->a = $newA;
  }

  function printMax() {
    echo self::MAX_NUMBER;
  }
}

$newObj = new CreateObj();

$newObj->a = 'name';
$newObj->b = 3;
$newObj->c = 5;

$newObj->printMax();

// var_dump($newObj);
// $newObj->changeA('new val');
// var_dump($newObj);
