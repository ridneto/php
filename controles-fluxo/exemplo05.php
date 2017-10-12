<form>

	<iput type="text" name="nome"> </iput>
	<iput type="date" name="nascimento"> </iput>
	<iput type="submit" name="OK"> </iput>
</form>

<?php

if(isset($_GET)){
	foreach ($_GET as $key => $value) {
		echo "Nome do campo: " . $key;
		echo "Valor do campo: " . $value;
		echo "<hr>";
	}
} 

?>