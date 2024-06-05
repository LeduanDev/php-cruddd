<?php
// Incluir el archivo de conexión
include '../conexion/conexion.php';

// Verificar si se ha enviado el formulario de creación
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $bibliografia = $_POST['bibliografia'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    
    // Preparar la consulta SQL de inserción
    $sql = "INSERT INTO autor (nombre, bibliografia, fecha_nacimiento) VALUES ('$nombre', '$bibliografia', '$fecha_nacimiento')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "Nuevo autor creado exitosamente";
    } else {
        echo "Error al crear el autor: " . $conn->error;
    }
}
?>