<?php

class Building {
  const MAX_FLOORS = 20;

  private $floors;

  public function setFloorsNumber($floorsNumber)
  {
    echo "Вызван метод " . __METHOD__ . PHP_EOL;
    if ($floorsNumber > self::MAX_FLOORS){
      echo "Превышено максимальное кол-во этажей" . PHP_EOL;
      return;
    }
    $this->floors = $floorsNumber;
  }

  public function showFloorsNumber() {
    echo "Вызван метод " . __METHOD__ . PHP_EOL;
    echo $this->floors . PHP_EOL;
  }

  public function showClassName() {
    echo "Вызван класс " . __CLASS__ . PHP_EOL;
  }
}

$building = new Building;
$building->setFloorsNumber(30);
$building->setFloorsNumber(10);
$building->showFloorsNumber();
// $building->showClassName();

echo Building::class;
