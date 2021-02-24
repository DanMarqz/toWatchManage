<?php

  require_once "../../clases/Contactos.php";

  $Contactos = new Contactos();

  $datos = array(
                "apellido" => $_POST['apellidoContacto'],
                "nombre" => $_POST['nombreContacto'],
                "telefono" => $_POST['telefonoContacto'],
                "email" => $_POST['emailContacto'],
                "idCategoria" => $_POST['idCategoriaselect']
                );

  echo $Contactos->agregarContacto($datos);
?>