<?php

class Building {
  protected $floors, $matherial;

  protected function setFloorsNumber($floorsNumber)
  {
    if ($floorsNumber > 20) {
      echo 'Кол-во этажей не может превышать 20' . PHP_EOL;
    } else {
      $this->floors = $floorsNumber;
    }
  }
}

class House extends Building {
  private $heatingType, $address;

  public function __construct($floorsNumber, $matherial, $heatingType, $address)
  {
    $this->matherial = $matherial;
    $this->setFloorsNumber($floorsNumber);
    $this->heatingType = $heatingType;
    $this->address = $address;
  }

  public function showHouseDescription() {
    echo $this->matherial . PHP_EOL;
    echo $this->heatingType . PHP_EOL;
    echo $this->address . PHP_EOL;
  }
}

$cityHouse = new House(8, 'Кирпич', 'Газовое', 'Улица Садовая');
$cityHouse->showHouseDescription();
