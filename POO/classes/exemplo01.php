<?php 

class Pessoa{
	public $nome;

	public function falar(){
		return "Meu nome é " . $this->nome;
	}
}

$pessoa = new Pessoa();
$pessoa->nome = "Ridineu";

echo $pessoa->falar();

 ?>