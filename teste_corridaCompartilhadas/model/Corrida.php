<?php

class Corrida{
	private $motorista;
	private $passageiro;
	private $valor;

	public function getMotorista(){
		return $this->motorista;
	}

	public function setMotorista($motorista){
		$this->motorista = $motorista;
	}

	public function getPassageiro(){
		return $this->passageiro;
	}

	public function setPassageiro($passageiro){
		$this->passageiro = $passageiro;
	}

	public function getValor(){
		return $this->valor;
	}

	public function setValor($valor){
		$this->valor = $valor;
	}

	public function __construct($motorista, $passageiro, $valor){
		$this->motorista = $motorista;
		$this->passageiro = $passageiro;
		$this->valor = $valor;
	}

	public function __toString(){
		return json_encode(array(
			"motorista" => $this->motorista,
			"passageiro" => $this->passageiro,
			"valor" => $this->valor
		));
	}
}

?>