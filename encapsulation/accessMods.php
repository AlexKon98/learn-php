<?php

class TestParent
{
  private function testMethod()
  {
    echo 'It works!' . PHP_EOL;
  }

  public function showMessage()
  {
    $this->testMethod();
  }

  protected function protectedMethod() {
    echo 'Я доступен в классе-наследнике, но так же не доступен вне класса' . PHP_EOL;
  }
}

class TestInheritance extends TestParent {
  public function testPublic() {
    $this->testMethod();
  }
}

$testParentObj = new TestParent();
$testInheritance = new TestInheritance();

#  $testInheritance->testPublic(); - сработает
#  $testParentObj->showMessage(); - сработает
// $testParentObj->testMethod(); - не сработает
// $testInheritance->protectedMethod(); - не сработает
// $testInheritance->testMethod(); - не сработает
