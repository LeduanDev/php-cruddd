<?php
    include '../plantillas/base.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear libro</title>
</head>
<body>
<div class="container">
    <br>
    <form action="../sql/registro_libros.php" method="post">    

    <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Nombre</label>
    <input type="text" class="form-control">
    </div>
    <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Fecha Publicación</label>
    <input type="text" class="form-control">
    </div>
    <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Genero</label>
    <input type="text" class="form-control">
    </div> 
    <div>
    <label for="formGroupExampleInput2" class="form-label">Autor</label>
    <select class="form-select" aria-label="Default select example">
    <option value="1">One</option>
    </select>
    </div>
    <br>
    <div>
    <label for="formGroupExampleInput2" class="form-label">Estado</label>
    <select class="form-select" aria-label="Default select example">
    <option value="1">One</option>
    </select>
    </div>
    <br>
    <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Descripcion</label>
    <input type="text" class="form-control">
    </div>
    <div>
    <label for="formGroupExampleInput2" class="form-label">Editorial</label>
    <select class="form-select" aria-label="Default select example">
    <option value="1">One</option>
    </select>
    </div>   
    <div><br>
    <button type="button" class="btn btn-primary">Primary</button>
    </form>
</div>
</body>
</html>