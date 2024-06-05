<?php
    include '../plantillas/base.php';
    include '../conexion/conexion.php';
    // Incluir el archivo de creación de autor
    include '../sql/crear_autor.php';
?>
<br>
<br>
<br>
<main class="diplay justify-center mt-20"> <!-- Agrega un margen superior al main para evitar que se superponga al navbar -->
    <div class="container mx-auto py-6"> <!-- Utiliza un contenedor para centrar el contenido -->
        <h2 class="text-xl font-semibold mb-4">Crear Nuevo Autor</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="nombre" class="block mb-2">Nombre:</label>
            <input type="text" name="nombre" class="border border-gray-300 rounded-md px-3 py-2 mb-2" required>
            <label for="bibliografia" class="block mb-2">Bibliografía:</label>
            <textarea name="bibliografia" class="border border-gray-300 rounded-md px-3 py-2 mb-2" required></textarea>
            <label for="fecha_nacimiento" class="block mb-2">Fecha de Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" class="border border-gray-300 rounded-md px-3 py-2 mb-4" required>
            <input type="submit" value="Crear" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-blue-600 cursor-pointer">
        </form>
    </div>
</main>
