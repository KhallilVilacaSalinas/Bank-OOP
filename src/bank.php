<?php

require 'src/class/Account.php';
require 'src/class/Holder.php';
require 'src/class/Cpf.php';

$newAccount = new Account(new Holder(new Cpf("528.928.928-30"), "Khaaaaa"),4000);

echo $newAccount->getNameHolder() . PHP_EOL;
echo $newAccount->getCpfHolder() . PHP_EOL;
echo $newAccount->getBalance() . PHP_EOL;

