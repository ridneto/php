<?php

$dt = new DateTime();

echo $dt->format("d/m/Y H:i:s");

echo "<br>";

$dt->add(new DateInterval("P15D"));

echo $dt->format("d/m/Y H:i:s");

?>