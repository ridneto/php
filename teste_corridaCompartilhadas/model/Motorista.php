<?php

class Motorista extends Pessoa{
	private $ativo;

	public function getAtivo(){ 
		return $this->ativo;
	}

	public function setAtivo($ativo){
		$this->ativo = $ativo;
	}
}

?>