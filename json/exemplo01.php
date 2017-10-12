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

echo json_encode($pessoas);

?>