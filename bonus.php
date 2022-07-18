<?php

require_once 'autoload.php';

use Alura\Bank\Model\{Cpf, Employee};
use Alura\Bank\Service\bonusController;

$oneEmployee = new Employee(
    new Cpf( "528.928.928-30"),
    "Khallil V",
    "Vendedor",
    3000.0
);

$controller = new bonusController();
$controller->addBonus($oneEmployee);



echo $controller->getBonus();


