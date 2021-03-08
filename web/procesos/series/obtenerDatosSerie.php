<?php

	require_once "../../clases/Series.php";
	$Series = new Series();
	$idSerie = $_POST['idSerie'];

	echo json_encode($Series->obtenerDatosSerie($idSerie));

?>