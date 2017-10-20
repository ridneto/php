<?php

spl_autoload_register(function($nomeClasse){

	$file = "model" . DIRECTORY_SEPARATOR . $nomeClasse . ".php";

	if(file_exists($file){
		require_once($file);
	}
});

?>