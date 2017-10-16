<?php

class Pessoa{
	public $nome = "Lerdorf";
	protected $idade = 49;
	private $senha = "123456";

	public function verDado(){
		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}
}

$obj = new Pessoa();

//echo $obj->nome . "<br>";
//echo $obj->idade;


$obj->verDado();

?>