<?php
include "Pessoa.php";
include "Mesa.php";
////////////////////////////
//criando objeto do tipo Mesa
//instância
$m1 = new MesaTrabalho();
$m2 = new Mesa();

$m1->cor = "Branco";
$m1->gavetas = 2;
$m2->cor = "Bege";

print_r($m1);

print_r($m2);
