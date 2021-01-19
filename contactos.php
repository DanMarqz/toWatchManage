<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Pets Pals - Contactos</title>
  <link rel="icon" type="image/png" href="public/img/favicon.png">
  <?php require_once "dependencias.php"; ?>
</head>
<body>
  <div class="container">
    <?php require_once "menu.php";?>

    <div class="jumbotron">
      <h1 class="display-4">Contactos</h1>
      <button class="btn btn-primary">
      <i class="fas fa-paw"></i> Agregar contacto
      </button>
      <hr class="my-4">

      <div id="cargaTablaContactos"></div>

    </div>

  </div>

  <script src="public/js/contactos.js"></script>
</body>
</html>