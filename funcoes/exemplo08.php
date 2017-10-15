<?php

function soma(int ...$valores): string{
	return array_sum($valores);
}

echo var_dump(soma(2, 2)) . "<br>";
echo soma(1, 2, 3) . "<br>";
echo soma(61, 20, 3) . "<br>";
echo soma(1.9, 2);


?>