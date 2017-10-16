<?php

$json = '[{"Nome":"Neto","Idade":20},{"Nome":"Glauco","Idade":20}]';

$data = json_decode($json, true);

var_dump($data);

?>