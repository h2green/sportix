<?php
$host 		= "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname 	= "sportixdb";


// Crear Conexion a la base de datos
try {
	$mysqli = new mysqli($host, $dbusername, $dbpassword, $dbname);
	if ($mysqli->connect_error) {
		throw new Exception("Error de conexion: " . $mysqli->connect_error);
	}
} catch (Exception $e) {
	echo "Error: " . $e->getMessage();
}
?>
