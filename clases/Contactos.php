<?php
  require_once 'Conexion.php';

  class Contactos extends Conexion {
    public function agregarContacto($datos){
      $conexion = Conexion::conectar();

      $sql = "INSERT INTO t_contactos (id_categoria,
                                      apellido,
                                      nombre,
                                      telefono,
                                      email)
              VALUES (?,?,?,?,?)";

      $query =  $conexion->prepare($sql);
      $query->bind_param('issss', $datos['idCategoria'],
                                  $datos['apellido'],
                                  $datos['nombre'],
                                  $datos['telefono'],
                                  $datos['email']
                        );

      $respuesta = $query->execute();
      return $respuesta;
    }

    public function eliminarContacto($idContacto){
      $conexion = Conexion::conectar();

      $sql = "DELETE FROM
                t_contactos
              WHERE
                id_contacto = ?";
      $query = $conexion->prepare($sql);
      $query->bind_param('i', $idContacto);
      $respuesta = $query->execute();
      return $respuesta;
    }

    public function obtenerDatosContacto($idContacto){
      $conexion = Conexion::conectar();

      $sql = "SELECT id_categoria,
                      apellido,
                      nombre,
                      telefono,
                      email,
                      id_contacto
              FROM t_contactos
              WHERE id_contacto = '$idContacto'";

      $result = mysqli_query($conexion, $sql);

      $contacto = mysqli_fetch_array($result);

      $datos = array(
                    'id_contacto' => $contacto['id_contacto'],
                    'apellido' => $contacto['apellido'],
                    'nombre' => $contacto['nombre'],
                    'telefono' => $contacto['telefono'],
                    'email' => $contacto['email'],
                    'id_categoria' => $contacto['id_categoria']
                    );

      return $datos;
    }

    public function actualizarContacto($datos){
      $conexion = Conexion::conectar();

      $sql = "UPDATE t_contactos SET apellido = ?,
                                      nombre = ?,
                                      telefono = ?,
                                      email = ?,
                                      id_categoria = ?
              WHERE id_contacto = ?";

      $query = $conexion->prepare($sql);
      $query->bind_param('ssssii', $datos['apellido'],
                                    $datos['nombre'],
                                    $datos['telefono'],
                                    $datos['email'],
                                    $datos['idCategoria'],
                                    $datos['idContacto']);

      $respuesta = $query->execute();
      return $respuesta;
    }

  }

?>