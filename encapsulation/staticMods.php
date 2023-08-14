<?php

class Test {
  public static $publicField = 20;
  private static $privateField = 10;
  protected static $protectedField = 1;

  public function showPrivateField() {
    echo self::$privateField . PHP_EOL;
  }

  public function showProtectedField() {
    echo self::$protectedField . PHP_EOL;
  }
}

$testObj1 = new Test();

echo $testObj1::$publicField . PHP_EOL;
echo $testObj1->showPrivateField();
echo $testObj1->showProtectedField();

class Inherit extends Test {
  public function showPrivateField1() {
    echo self::$privateField . PHP_EOL;
  }

  public function showProtectedField1() {
    echo self::$protectedField . PHP_EOL;
  }
}

$testObj2 = new Inherit();

echo $testObj2::$publicField . PHP_EOL;
echo $testObj2->showProtectedField1();
echo $testObj2->showPrivateField1();
