<?php

  require_once 'Conexion.php';

  class Peliculas extends Conexion {
    public function agregarPelicula($datos){
      $conexion = Conexion::conectar();
      $sql = "INSERT INTO peliculas (nombre, url)
              VALUES (?, ?)";
      $query = $conexion->prepare($sql);
      $query->bind_param('ss', $datos['nombre'],
                                $datos['url']);
      $respuesta = $query->execute();
      return $respuesta;
    }

    public function eliminaPelicula($idPelicula){
      $conexion = Conexion::conectar();
      $sql = "DELETE FROM peliculas WHERE id_pelicula = ?";
      $query = $conexion->prepare($sql);
      $query->bind_param('i', $idPelicula);
      $respuesta = $query->execute();
      return $respuesta;
    }

    public function obtenerDatosPelicula($idPelicula){
      $conexion = Conexion::conectar();
      $sql = "SELECT id_pelicula,
                      nombre,
                      url
              FROM peliculas
              WHERE id_pelicula = '$idPelicula'";
      $result = mysqli_query($conexion, $sql);
      $pelicula = mysqli_fetch_array($result);

      $datos = array(
                    "idPelicula" => $pelicula['id_pelicula'],
                    "nombre" => $pelicula['nombre'],
                    "url" => $pelicula['url']
                    );

      return $datos;
    }

    public function actualizarPelicula($datos){
      $conexion = Conexion::conectar();

      $sql = "UPDATE peliculas
              SET nombre = ?,
									url = ?
					    WHERE id_pelicula = ?";

      $query = $conexion->prepare($sql);
      $query->bind_param('ssi', $datos['nombre'],
                                $datos['url'],
                                $datos['idPelicula']);

      $respuesta = $query->execute();
      return $respuesta;
    }

  }

?>
