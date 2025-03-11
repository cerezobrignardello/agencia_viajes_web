<?php
include "conexion.php";

echo "<h2>Vuelos Disponibles</h2>";
$result = $conn->query("SELECT * FROM VUELO");
while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id_vuelo"] . " - Origen: " . $row["origen"] . " - Destino: " . $row["destino"] . "<br>";
}

echo "<h2>Hoteles Disponibles</h2>";
$result = $conn->query("SELECT * FROM HOTEL");
while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id_hotel"] . " - Nombre: " . $row["nombre"] . " - Ubicación: " . $row["ubicación"] . "<br>";
}

$conn->close();
?>