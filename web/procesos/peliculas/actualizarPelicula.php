<?php

  require_once '../../clases/Peliculas.php';

  $datos = array(
    'idPelicula' => $_POST['idPelicula'],
    'nombre' => $_POST['nombrePeliculaU'],
    'url' => $_POST['urlU']
  );

  $Peliculas = new Peliculas();
  echo $Peliculas->actualizarPelicula($datos);
?>