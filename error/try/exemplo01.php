<?php

try {
	throw new Exception("Aconteceu um erro.", 420);	
} catch (Exception $e) {
	echo json_encode(array(
		"message"=>$e->getMessage(),
		"line"=>$e->getLine(),
		"file"=>$e->getLine(),
		"code"=>$e->getCode()
	));
}

?>