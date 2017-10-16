<?php

session_id('slablacfln16aj3igq87fkilig');

require_once("config.php");

/*
echo session_id();

echo "<br>";
*/

session_regenerate_id();

echo session_id();

echo "<br>";

var_dump($_SESSION);

?>