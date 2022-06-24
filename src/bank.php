<?php



require 'src/Model/People.php';
require 'src/Model/Employee.php';
require 'src/Model/Cpf.php';


//$address = new Address("São Paulo", "Vila Prudente", '141');
//$cpf = new Cpf("528.928.928-30");
//$khallil = new Holder($cpf, $address, "Khallil");
//$newAccount = new Account($khallil,4000);

$newFuncionario = new Employee(new Cpf('528.928.928-30'), "Khallil V", "VENDEDOR");
var_dump($newFuncionario);

echo $newFuncionario->role . PHP_EOL;
echo $newFuncionario->cpf->cpf . PHP_EOL;
echo $newFuncionario->name .  PHP_EOL;

//echo $newAccount->getNameHolder() . PHP_EOL;
//echo $newAccount->getCpfHolder() . PHP_EOL;
//echo $newAccount->getBalance() . PHP_EOL;

