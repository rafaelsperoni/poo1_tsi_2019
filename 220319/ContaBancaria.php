<?php

class ContaBancaria{
	private $agencia;
	private $conta;
	private $saldo = 0.0 ;

	public function getAgencia(){
		return $this->agencia;
	}
	public function setAgencia($agencia){
		$this->agencia = $agencia;
	}
	public function getConta(){
		return $this->conta;
	}
	public function setConta($conta){
		$this->conta = $conta;
	}
	public function getSaldo(){
		return $this->saldo;
	}
	public function deposito($valor){
		$this->saldo += $valor;
	}
	public function saque($valor){
		if ($valor <= $this->saldo){
			$this->saldo = $this->saldo-$valor;
			echo "<br>Saque efetuado";		
		}else{
			echo "<br>Saldo Insuficiente";
		}
	}
}