<?php
//conexion.php

// Crear la conexión a la base de datos
$conn = new mysqli("localhost", "root", "", "mydb");

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
