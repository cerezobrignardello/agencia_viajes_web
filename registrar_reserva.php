<?php
include "conexion.php";

$id_cliente = 1; // ID ficticio de cliente
$fecha_reserva = date("Y-m-d");
$id_vuelo = 1; // ID ficticio de vuelo
$id_hotel = 2; // ID ficticio de hotel

$stmt = $conn->prepare("INSERT INTO RESERVA (id_cliente, fecha_reserva, id_vuelo, id_hotel) VALUES (?, ?, ?, ?)");
$stmt->bind_param("isii", $id_cliente, $fecha_reserva, $id_vuelo, $id_hotel);

if ($stmt->execute()) {
    echo "Reserva registrada.";
} else {
    echo "Error en la reserva.";
}

$stmt->close();
$conn->close();
?>