<?php

  require_once '../../clases/Peliculas.php';

  $datos = array(
    'nombre' => $_POST['nombrePelicula'],
    'url' => $_POST['url']
  );

  $Peliculas = new Peliculas();
  echo $Peliculas->agregarPelicula($datos);
?>