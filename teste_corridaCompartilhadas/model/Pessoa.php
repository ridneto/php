<?php

class Pessoa{
	private $nome;
	private $dtNascimento;
	private $cpf;
	private $sexo;

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getDtNascimento(){
		return $this->dtNascimento;
	}

	public function setDtNascimento($dtNascimento){
		$this->dtNascimento = $dtNascimento;
	}

	public function getCpf(){
		return $this->cpf;
	}

	public function setCpf($cpf){
		$this->cpf = $cpf;
	}

	public function getSexo(){
		return $this->sexo;
	}

	public function setSexo($sexo){
		$this->sexo = $sexo;
	}

	public function __construct($nome, $dtNascimento, $cpf, $sexo){
		$this->nome = $nome;
		$this->dtNascimento = $dtNascimento;
		$this->cpf = $cpf;
		$this->sexo = $sexo;
	}

	public function __toString(){
		return json_encode(array(
			"nome" => $this->getNome(),
			"dtNascimento" => $this->getDtNascimento(),
			"cpf" => $this->getCpf(),
			"sexo" => $this->getSexo()
		));
	}
}

?>