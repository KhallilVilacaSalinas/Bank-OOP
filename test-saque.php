<?php

require_once 'autoload.php';

use Alura\Bank\Model\Account\{Account, Holder};
use Alura\Bank\Model\{Cpf, Address};

$account = new Account(
    new Holder(
        new Cpf('528.928.928-30'),
        'Khallil V',
        new Address("São Paulo", "Vila Prudente", '141'),
    ), 0
);

$account->depositMoney(500);
$account->withdrawMoney(100);

var_dump($account);
