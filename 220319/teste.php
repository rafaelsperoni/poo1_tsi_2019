<?php

require_once "Transacao.php";

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


print "<br>CONTA 2 - Sua agência: ".$conta2->getAgencia();
print "<br>Sua conta: ".$conta2->getConta();
print "<br>Seu saldo: ".$conta2->getSaldo();
$conta2->deposito(2000);
print "<br>Seu saldo: ".$conta2->getSaldo();
$conta2->saque(100);
print "<br>Seu saldo: ".$conta2->getSaldo();


$trans1 = new Transacao();

$trans1->setIdentificador('12321');
$trans1->transferencia($conta2, $conta1, 500);

print "<br>Seu saldo (CONTA 1): ".$conta1->getSaldo();
print "<br>Seu saldo (CONTA 2): ".$conta2->getSaldo();


