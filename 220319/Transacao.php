<?php


require_once 'ContaBancaria.php';

class Transacao{
	private $identificador;
	private $valor;

	public function getIdentificador(){
		return $this->identificador;
	}

	public function setIdentificador($identificador){
		$this->identificador = $identificador;
	}

	public function getValor(){
		return $this->valor;
	}

	public function setValor($identificador){
		$this->valor = $valor;
	}

	public function transferencia($origem, $destino, $valor){
		//origem e destino serão objetos do tipo ContaBancaria
		$origem->saque($valor);
		$destino->deposito($valor);
	}

}