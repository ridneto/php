<?php

$nome = "neto";

function teste(){
	
	global $nome;
	echo $nome;
}


function teste2(){

	$nome = "pedro";

	echo $nome . " agora no teste2";
}

teste();

echo "<br/>";

teste2();

?>