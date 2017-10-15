<?php

function soma(int ...$valores){
	return array_sum($valores);
}

echo soma(1, 2, 3) . "<br>";
echo soma(61, 20, 3) . "<br>";
echo soma(1.9, 2);


?>