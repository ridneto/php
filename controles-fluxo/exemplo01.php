<?php

$minhaIdade = 20;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($minhaIdade < $idadeCrianca){
	echo "Criança";
} elseif ($minhaIdade < $idadeMaior) {
	echo "Adolecente";
} elseif ($minhaIdade < $idadeMelhor) {
	echo "Adulto";
}else{
	echo "Idoso";
}

echo "<br>";

echo ($minhaIdade < $idadeMaior) ? "Menor de idade" : "Maior de idade";

?>