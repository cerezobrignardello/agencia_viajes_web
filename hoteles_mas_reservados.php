<?php
include "conexion.php";

$sql = "SELECT H.nombre, COUNT(R.id_reserva) as total_reservas 
        FROM HOTEL H
        JOIN RESERVA R ON H.id_hotel = R.id_hotel
        GROUP BY H.id_hotel
        HAVING total_reservas > 2";

$result = $conn->query($sql);

echo "<h2>Hoteles con más de 2 reservas</h2>";
while ($row = $result->fetch_assoc()) {
    echo "Hotel: " . $row["nombre"] . " - Reservas: " . $row["total_reservas"] . "<br>";
}

$conn->close();
?>