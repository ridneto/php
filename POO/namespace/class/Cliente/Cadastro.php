<?php

namespace Cliente;

class Cadastro extends \Cadastro{
	public function registrarVenda(){
		echo "Registrada uma venda para o cliente " . $this->getNome();
	}
}


?>