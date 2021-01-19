<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Pets Pals - Categorías</title>
  <link rel="icon" type="image/png" href="public/img/favicon.png">
  <?php require_once "dependencias.php"; ?>
</head>

<body>
  <div class="container">
    <?php require_once "menu.php";?>

    <div class="jumbotron">
      <h1 class="display-4">Categorías</h1>
      <button class="btn btn-primary">
        <i class="fas fa-folder-plus"></i> Agregar categoría
      </button>
      <hr class="my-4">

      <div id="cargaTablaCategorias">

      </div>

    </div>

  </div>

  <script src="./public/js/categorias.js"></script>
</body>

</html>