<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Pets Pals - Inicio</title>
  <link rel="icon" type="image/png" href="public/img/favicon.png">
  <?php require_once "dependencias.php"; ?>
</head>
<body>
  <div class="container">
    <?php require_once "menu.php";?>

    <div class="jumbotron">
      <h1 class="display-4">Pet Pals!</h1>

      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body"><img src="public/img/contacto.jpg" class="img-fluid" alt="Imagen de contacto"></div>
          </div>  
        </div>
        
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <ul class="list-group">
                <li class="list-group-item list-group-item-info"><h3>Nombre y apellido</h3></li>
                <li class="list-group-item">Breve descripción de la persona</li>
                <li class="list-group-item">Animales favoritos</li>
                <li class="list-group-item">Mascotas amigas</li>
              </ul>
            </div>
          </div>  
        </div>

      </div>

      <hr class="my-4">

      <p>Pet Pals está hecho en el 2021 con PHP y MySQL. By Daniel Marquez.</p>
    </div>

  </div>
</body>
</html>