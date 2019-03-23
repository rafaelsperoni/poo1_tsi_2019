<?php

require_once "ContaBancaria.php";

$conta1 = new ContaBancaria();
$conta2 = new ContaBancaria();

$conta1->setAgencia(12345);
$conta1->setConta(4322);

print "Sua agência: ".$conta1->getAgencia();
print "<br>Sua conta: ".$conta1->getConta();
print "<br>Seu saldo: ".$conta1->getSaldo();
$conta1->deposito(1000);
print "<br>Seu saldo: ".$conta1->getSaldo();
$conta1->saque(300);
print "<br>Seu saldo: ".$conta1->getSaldo();
