<?php
/*
ARQUIVO teste.php
*/

//Vai usar o arquivo Cachorro.php
require_once "Cachorro.php";

//CRIAR INSTÂNCIA DA CLASSE Cachorro
$cao1 = new Cachorro();
$cao1->nome = "Rex";
$cao1->cor = "Branco";
$cao1->latir();
$cao1->morder();
//var_dump($cao1);
//CRIAR OUTRO CAO CHAMADO Thor
$cao2 = new Cachorro();
$cao2->nome = "Thor";
$cao2->cor = "Preto";
$cao2->latir();
//var_dump($cao2);

//escrever
//O Rex é Branco
//O Thor é preto