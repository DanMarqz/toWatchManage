<?php

require_once "../../clases/Series.php";
$Series = new Series();
$idSerie = $_POST['idSerie'];

echo $Series->eliminarSerie($idSerie);
?>