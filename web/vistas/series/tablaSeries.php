<?php
  require_once "../../clases/Conexion.php";
  $con = new Conexion();
  $conexion = $con->conectar();

  $sql = "SELECT
            series.nombre AS nombre,
            series.temporada AS temporada,
            series.episodio AS episodio,
            series.url AS url,
            series.id_serie AS idSerie
          FROM
            series AS series";

  $result = mysqli_query($conexion, $sql);


?>

<div class="card">
  <div class="card-body">
    <div class="table-responsive">

      <table class="table table-hover table-condensed" id="tablaSeriesDT">

        <thead>
          <tr>
            <th>Name</th>
            <th>Season</th>
            <th>Episode</th>
            <th>URL</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>

        <tbody>

        <?php
        while($mostrar = mysqli_fetch_array($result)){
          $idSerie = $mostrar['idSerie'];
        ?>

          <tr>
            <td><?php echo$mostrar['nombre'] ?></td>
            <td><?php echo$mostrar['temporada'] ?></td>
            <td><?php echo$mostrar['episodio'] ?></td>
            <td class="text-truncate" style="max-width: 30vh;"> <a href="<?php echo $mostrar['url'] ?>" target="_blank"> <?php echo $mostrar['url'] ?> </a> </td>
    <!-- Botón actualizar Serie -->
            <td>
              <span class="btn btn-warning btn-sm" onclick="obtenerDatosSerie('<?php echo $idSerie ?>')" data-bs-toggle="modal" data-bs-target="#modalActualizarSerie">
                <i class="fas fa-user-edit"></i>
              </span>
            </td>
      <!-- Botón eliminar Serie -->
            <td>
              <span class="btn btn-danger btn-sm" onclick="eliminarSerie('<?php echo $idSerie ?>')">
                <i class="fas fa-user-minus"></i>
              </span>
            </td>
          </tr>

          <?php } ?>

        </tbody>

      </table>

    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#tablaSeriesDT').DataTable();
  });
</script>