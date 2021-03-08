<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>To watch - Movies</title>
  <link rel="icon" type="image/png" href="public/img/favicon.png">
  <?php require_once "dependencias.php"; ?>
</head>

<body>
  <div class="container">
    <?php require_once "menu.php";?>

    <div class="jumbotron">

      <h1 class="display-4">Movies to watch</h1>

      <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalAgregarPelicula">
        <i class="fas fa-ticket-alt"></i> Add Movie
      </button>
      
      <hr class="my-4">

      <div id="cargaTablaPeliculas"></div>
    </div>

    <?php
      require_once "vistas/peliculas/modalAgregar.php"; 
      require_once "vistas/peliculas/modalActualizar.php"; 
    ?>

  </div>

  <script src="./public/js/peliculas.js"></script>
</body>

</html>