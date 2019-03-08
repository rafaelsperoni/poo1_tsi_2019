<?php

class Mesa{
	public $altura;
	public $largura;
	public $comprimento;
	public $cor;
	public $marca;

	public function abreGaveta(){
		echo "Abriu a gaveta!!";
	}

	public function fechaGaveta(){
		echo "Fechou a gaveta!!";
	}
}

Class MesaTrabalho extends Mesa{
	public $gavetas;
}