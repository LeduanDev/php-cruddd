<!-- base.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Título de la página</title>
    <!-- Aquí puedes incluir tus estilos CSS, scripts, etc. -->
</head>
<body>
    <header>
        <!-- Encabezado común a todas las páginas -->
    </header>

    <main>
        <!-- Aquí se incluirá el contenido específico de cada página -->
        <?php include $content; ?>
    </main>

    <footer>
        <!-- Pie de página común a todas las páginas -->
    </footer>
</body>
</html>


<!-- home.php -->
<?php
    $content = 'content_home.php';
    include 'base.php';
?>

<!-- content_home.php -->
<h1>Bienvenido a mi sitio web</h1>
<p>Este es el contenido de la página de inicio.</p>
