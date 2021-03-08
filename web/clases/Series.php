<?php
  require_once 'Conexion.php';

  class Series extends Conexion {
    public function agregarSerie($datos){
      $conexion = Conexion::conectar();

      $sql = "INSERT INTO series (id_serie,
                                      nombre,
                                      temporada,
                                      episodio,
                                      url)
              VALUES (?,?,?,?,?)";

      $query =  $conexion->prepare($sql);
      $query->bind_param('issss', $datos['idSerie'],
                                  $datos['nombre'],
                                  $datos['temporada'],
                                  $datos['episodio'],
                                  $datos['url']
                        );

      $respuesta = $query->execute();
      return $respuesta;
    }

    public function eliminarSerie($idSerie){
      $conexion = Conexion::conectar();

      $sql = "DELETE FROM
                series
              WHERE
                id_serie = ?";
      $query = $conexion->prepare($sql);
      $query->bind_param('i', $idSerie);
      $respuesta = $query->execute();
      return $respuesta;
    }

    public function obtenerDatosSerie($idSerie){
      $conexion = Conexion::conectar();

      $sql = "SELECT id_serie,
                      nombre,
                      temporada,
                      episodio,
                      url
              FROM series
              WHERE id_serie = '$idSerie'";

      $result = mysqli_query($conexion, $sql);

      $serie = mysqli_fetch_array($result);

      $datos = array(
                    'id_serie' => $serie['id_serie'],
                    'nombre' => $serie['nombre'],
                    'temporada' => $serie['temporada'],
                    'episodio' => $serie['episodio'],
                    'url' => $serie['url']
                    );

      return $datos;
    }

    public function actualizarSerie($datos){
      $conexion = Conexion::conectar();

      $sql = "UPDATE series SET nombre = ?,
                                temporada = ?,
                                episodio = ?,
                                url = ?
              WHERE id_serie = ?";

      $query = $conexion->prepare($sql);
      $query->bind_param('ssssi', $datos['nombre'],
                                    $datos['temporada'],
                                    $datos['episodio'],
                                    $datos['url'],
                                    $datos['idSerie']);

      $respuesta = $query->execute();
      return $respuesta;
    }

  }

?>