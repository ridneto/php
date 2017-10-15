<?php

// $ts = strtotime("2001-09-11");
// strtotime("now");

$ts =  strtotime("+1 month");

echo date("l, d/m/Y", $ts);


?>