<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>To watch - Series</title>
  <link rel="icon" type="image/png" href="public/img/favicon.png">
  <?php require_once "dependencias.php"; ?>
</head>

<body>
  <div class="container">
    <?php require_once "menu.php";?>

    <div class="jumbotron">

      <h1 class="display-4">Series</h1>

      <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalAgregarSerie">
        <i class="fas fa-paw"></i> Add Serie
      </button>

      <hr class="my-4">

      <div id="cargaTablaSeries"></div>
    </div>

    <?php
      require_once "vistas/series/modalAgregar.php"; 
      require_once "vistas/series/modalActualizar.php"; 
    ?>

  </div>

  <script src="./public/js/series.js"></script>
</body>

</html>