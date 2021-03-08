<?php

require_once '../../clases/Peliculas.php';

$idPelicula = $_POST['idPelicula'];
$Peliculas = new Peliculas();

echo json_encode($Peliculas->obtenerDatosPelicula($idPelicula));

?>