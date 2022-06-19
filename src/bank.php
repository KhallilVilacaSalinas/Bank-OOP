<?php

require 'src/class/Account.php';

$newAccont = new Account("528.928.928-30", "Khallil V S", 5600);

$newAccont->depositMoney(500.0);
echo $newAccont->getNameHolder(). PHP_EOL;
echo $newAccont->getCpfHolder(). PHP_EOL;
echo $newAccont->getBalance(). PHP_EOL;