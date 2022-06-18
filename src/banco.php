<?php

require 'src/class/Conta.php';

$newConta = new Conta();

$newConta->depositar(500.0);
echo $newConta->recuperarSaldo();