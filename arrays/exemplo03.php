<?php

$pessoas = array();

array_push($pessoas, array(
	'Nome' => 'Neto',
	'Idade' => 20
));

array_push($pessoas, array(
	'Nome' => 'Glauco',
	'Idade' => 20
));

print_r($pessoas[0]['Nome']);

?>