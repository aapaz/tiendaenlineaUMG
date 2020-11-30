<?php
	
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$db = 'store';

	$conection = @mysqli_connect($host, $user, $password, $db);

	if (!$conection) {
		echo "Error en la conexcion.";
	}
?>