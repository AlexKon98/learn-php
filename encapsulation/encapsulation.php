<?php

// Инкапсуляция — это механизм, позволяющий
// хранить данные и методы работы с ними в одной
// структуре.
// В объектно-ориентированном программировании
// инкапсуляция также подразумевает возможность
// скрытия данных и методов от внешнего
// воздействия.

class Bank
{
  private $accounts = [];
  private $corrAccount, $bankCode;

  public function __construct($corrAccount, $bankCode)
  {
    $this->corrAccount = $corrAccount;
    $this->bankCode = $bankCode;
  }

  public function createAccount( $accNumber )
  {
    $this->accounts[] = $accNumber;
  }

  public function showAccountsList()
  {
    print_r($this->accounts);
  }
}

$bank = new Bank('4356980721546785', 'FB736');
$bank->createAccount('4362 9088 5412 7864');
$bank->createAccount('6574 2134 9806 5427');
$bank->showAccountsList();

$newBank = new Bank('6767898909095656', 'NB981');
$newBank->createAccount('5674 3459 0783 1209');
$newBank->createAccount('7698 0543 7621 1245');
$newBank->showAccountsList();
