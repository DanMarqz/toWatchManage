<?php

  require_once "../../clases/Contactos.php";
  $Contactos = new Contactos();

  $datos = array(
                "apellido" => $_POST['apellidoContactoU'],
                "nombre" => $_POST['nombreContactoU'],
                "telefono" => $_POST['telefonoContactoU'],
                "email" => $_POST['emailContactoU'],
                "idContacto" => $_POST['idContactoU'],
                "idCategoria" => $_POST['idCategoriaselectU']
                );

  echo $Contactos->actualizarContacto($datos);

?>