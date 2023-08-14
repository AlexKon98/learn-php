<?php

trait SomeTrait {
  public function traitFunc() {
    echo 'trait function' . PHP_EOL;
  }

  public function sameFunc() {
    echo 'im same func' . PHP_EOL;
  }
}

trait AnotherTrait {
  public function someOtherFunc() {
    echo "Im another function" . PHP_EOL;
  }

  public function sameFunc() {
    echo 'im same func' . PHP_EOL;
  }
}

class AnotherClass {
  use SomeTrait, AnotherTrait {
    # если в трейтах будут одинаково названные функции, то возникнет конфликт, потребуется указать метод какого трейта использовать виесто такого же метода в другом трейте
    SomeTrait::sameFunc insteadOf AnotherTrait;
    AnotherTrait::sameFunc as newFuncName;
  }

  public function callFunc() {
    $this->sameFunc();
    $this-> newFuncName();
  }
}

$newObj = new AnotherClass();
$newObj->callFunc();

# таким образом внутри класса становятся доступны все методы трэйта SomeTrait
class ClassThatUseTrait {
  use SomeTrait;

  public function callTrait() {
    # можно вызвать метод трейта через this
    $this->traitFunc();
  }
}

$obj = new ClassThatUseTrait();
$obj->traitFunc();