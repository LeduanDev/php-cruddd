<?php
// Incluir el archivo de conexión
include '../conexion/conexion.php';

// Realizar la consulta SQL para seleccionar todos los datos de la tabla autor
$sql = "SELECT * FROM autor";

// Ejecutar la consulta
$resultado = $conn->query($sql);

// Verificar si se obtuvieron resultados
if ($resultado->num_rows > 0) {
    // Iterar sobre los resultados y mostrar los datos
    while ($fila = $resultado->fetch_assoc()) {
        echo "ID: " . $fila["id"] . "<br>";
        echo "Nombre: " . $fila["nombre"] . "<br>";
        echo "Bibliografía: " . $fila["bibliografia"] . "<br>";
        echo "Fecha de Nacimiento: " . $fila["fecha_nacimiento"] . "<br><br>";
    }
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión
$conn->close();
?>
