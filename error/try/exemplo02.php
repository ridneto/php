<?php

function trataNome($name){

	$name = trim($name);

	if(!$name){
		throw new Exception("Nenhum nome informado <br>", 100);		
	}	

	echo ucfirst($name) . "<br>";
}

try {
	trataNome("Joao");
	trataNome("");
} catch (Exception $e) {
	echo $e->getMessage();
}finally{
	echo "Executou o Try!";
}


?>