<?php
/* 
nome do arquivo - Cachorro.php 
*/

//definição da Classe
class Cachorro{
	//Propriedades ou atributos
	public $cor;
	public $raca;
	public $nome;

	public function latir(){
		print "Sou o ".$this->nome." Au-au!!<br>";
	}
	public function morder(){
		print "Nhac!!<br>";
	}
}