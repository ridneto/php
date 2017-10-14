<?php

require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_status());

echo "<br>";

switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "Sessões desabilitadas";
		break;
	case PHP_SESSION_NONE:
		echo "Sessão habilitada, mas nao iniciada";
		break;
	case PHP_SESSION_ACTIVE:
		echo "sessão habilitada";
		break;
}

?>