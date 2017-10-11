<?php

$anoNascimento = 1997;

$nome = "Ridineu";

$sobrenome = "Moraes";

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;

exit;

echo $nome;

echo "<br/>";

unset($nome);

if (isset($nome)){
	echo $nome;
}

?>