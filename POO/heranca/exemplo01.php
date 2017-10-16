<?php

class Documento{
	private $numero;

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){
		$this->numero = $numero;
	}
}

class CPF extends Documento{
	public function validar():bool{
		// finge que valida

		return true;
	}
}


$doc = new CPF();
$doc->setNumero("44380492885");

var_dump($doc->validar());
echo "<br>";

echo $doc->getNumero();

?>