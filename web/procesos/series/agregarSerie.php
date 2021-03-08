<?php

  require_once "../../clases/Series.php";

  $Series = new Series();

  $datos = array(
                "nombre" => $_POST['nombreSerie'],
                "temporada" => $_POST['temporadaSerie'],
                "episodio" => $_POST['episodioSerie'],
                "url" => $_POST['urlSerie']
                );

  echo $Series->agregarSerie($datos);
?>