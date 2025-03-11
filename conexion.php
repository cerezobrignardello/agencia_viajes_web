<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$base_datos = "AGENCIA";

$conn = new mysqli($servidor, $usuario, $clave, $base_datos);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos.";
}
?>