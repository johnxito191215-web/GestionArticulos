<?php
$host = "mysql-johnxito.alwaysdata.net";
$usuario = "johnxito";
$password = "clase1234";
$bd = "johnxito_gestion_articulos";

$conn = new mysqli($host, $usuario, $password, $bd);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>

