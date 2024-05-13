<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="raw mt-5">
            <div class="col">
                <h1>Productos <a href="index.php" class="btn btn-dark">Regresar</a></h1>
            </div>
    </div> 
    <form action="config/insert-product.php" method="POST" autocomplete="off">
    <div class="row mt-5">
        <div class="col-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" required>
        </div>
        <div class="col-6">
            <label for="precio" class="form-label">Precio</label>
            <input type="text" class="form-control" name="precio" id="precio" inputmode="decimal" pattern="[0-9]+([\.,][0-9]+)?" title="Ingrese solo números" placeholder="Ejemplo: 12.34" required>
        </div>
        <div class="col-12">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion" required>
        </div>
        <div class="col mt-3 ">
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </div>
</form>
    </div>
</body>
</html>