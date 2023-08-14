<?php

interface Animal {
  public function makeNoice();
  public function makeMotion();
}

class Bird implements Animal {
  public function makeMotion() {
    echo 'Bird sound' . PHP_EOL;
  }

  public function makeNoice() {
    echo 'I am flying' . PHP_EOL;
  }
}

class Manmal implements Animal {
  public function makeMotion() {
    echo 'Manmal sound' . PHP_EOL;
  }

  public function makeNoice() {
    echo 'Moving' . PHP_EOL;
  }
}

class Farm {
  private $animals;

  public function addAnimal(Animal $animal) {
    $this->animals[] = $animal;
  }

  public function showAnimal() {
    foreach($this->animals as $animal) {
      $animal->makeNoice();
      $animal->makeMotion();
    }
  }
}

$cow = new Manmal();
$chicken = new Bird();

$farm = new Farm();

$farm->addAnimal($cow);
$farm->addAnimal($chicken);

$farm->showAnimal();
