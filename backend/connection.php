<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "sportixdb";

$conn = new mysqli($host, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
	die("Error de conexion: " . $conn->connect_error);
}
?>

