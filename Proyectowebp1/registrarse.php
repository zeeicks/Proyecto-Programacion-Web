<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Registro de Personas</title>
</head>
<body>
<div class="container mt-5">
  <h2>Registrarse</h2>
  <form action="conexion.php" method="post" enctype="multipart/form-data">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="Nombre">Nombre</label>
        <input type="text" class="form-control" id="Nombre" name="Nombre" required>
      </div>
    </div>
  </div>
      <div class="container mt-5">
      <div class="form-row">
      <div class="form-group col-md-6">
        <label for="Apellido">Apellido</label>
        <input type="text" class="form-control" id="Apellido" name="Apellido" required>
      </div>
    </div>
  </div>

      <div class="container mt-5">
      <div class="form-group col-md-6">
        <label for="Email">Email</label>
        <input type="text" class="form-control" id="Email" name="Email" required>
      </div>
    </div>

      <div class="container mt-5">
      <div class="form-group col-md-6">
        <label for="Contraseña">Contraseña</label>
        <input type="text" class="form-control" id="Contraseña" name="Contraseña" required>
      </div>
    </div>

      <div class="container mt-5">
      <div class="form-group col-md-6">
        <label for="Rut">Rut</label>
        <input type="text" class="form-control" id="Rut" name="Rut" required>
      </div>
    </div>

    <div class="container mt-5">
    <button type="button" class="btn btn-secondary btn-lg">Registrarse</button>
    </div>


      

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>