<?php

require_once '../../clases/Peliculas.php';

$idPelicula = $_POST['idPelicula'];

$Peliculas = new Peliculas();
echo $Peliculas->eliminaPelicula($idPelicula);

?>