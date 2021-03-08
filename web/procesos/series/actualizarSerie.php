<?php

  require_once "../../clases/Series.php";
  $Series = new Series();

  $datos = array(
                "nombre" => $_POST['nombreSerieU'],
                "temporada" => $_POST['temporadaSerieU'],
                "episodio" => $_POST['episodioSerieU'],
                "url" => $_POST['urlSerieU'],
                "idSerie" => $_POST['idSerieU']
                );

  echo $Series->actualizarSerie($datos);

?>