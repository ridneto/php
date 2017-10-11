<?php

$frase = "A cada dez, cinco é na maldade";

$palavra = "cinco";

$q = strpos($frase, $palavra);

$texto = substr($frase, 0, $q + strlen($palavra));

$texto2 = substr($frase, $q + strlen($palavra));

var_dump($texto);

echo "<br>";

var_dump($texto2);

?>