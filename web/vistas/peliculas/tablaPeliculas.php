
<?php
  require_once '../../clases/Conexion.php';
  $objCon = new Conexion();
  $conexion = $objCon->conectar();

  $sql= "SELECT nombre, url, id_pelicula
          FROM peliculas";
  $result = mysqli_query($conexion, $sql);

?>

<div class="card">
  <div class="card-body">
    <div class="table-responsive">

      <table class="table table-hover table-condensed" id="tablaPeliculasDT">

        <thead>
          <tr>
            <th>Name</th>
            <th>URL</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>

        <tbody>
        <?php
          while($mostrar = mysqli_fetch_array($result)){
            $idPelicula = $mostrar['id_pelicula']
        ?>
          <tr>
            <td> <?php echo $mostrar['nombre'] ?> </td>
            <td class="text-truncate" style="max-width: 30vh;"> <a href="<?php echo $mostrar['url'] ?>" target="_blank"> <?php echo $mostrar['url'] ?> </a> </td>
            <!-- Botón para actualizar categoría -->
            <td>
              <span onclick="obtenerDatosPelicula('<?php echo $idPelicula ?>')" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalActualizarPelicula">
                <i class="fas fa-pen"></i>
              </span>
            </td>
            <!-- Botón para eliminar categoría -->
            <td>
              <span class="btn btn-danger btn-sm" onclick="eliminarPelicula('<?php echo $idPelicula ?>')">
                <i class="fas fa-trash"></i>
              </span>
            </td>
          </tr>
        <?php
          }
        ?>
        </tbody>

      </table>

    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#tablaPeliculasDT').DataTable();
  });
</script>