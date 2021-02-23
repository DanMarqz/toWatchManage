
<?php
  require_once '../../clases/Conexion.php';
  $objCon = new Conexion();
  $conexion = $objCon->conectar();

  $sql= "SELECT nombre, descripcion, id_categoria
          FROM t_categorias";
  $result = mysqli_query($conexion, $sql);

?>

<div class="card">
  <div class="card-body">
    <div class="table-responsive">

      <table class="table table-hover table-condensed" id="tablaCategoriasDT">

        <thead>
          <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>

        <tbody>
        <?php
          while($mostrar = mysqli_fetch_array($result)){
            $idCategoria = $mostrar['id_categoria']
        ?>
          <tr>
            <td> <?php echo $mostrar['nombre'] ?> </td>
            <td> <?php echo $mostrar['descripcion'] ?> </td>
            <!-- Botón para actualizar categoría -->
            <td>
              <span onclick="obtenerDatosCategoria('<?php echo $idCategoria ?>')" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalActualizarCategoria">
                <i class="fas fa-pen"></i>
              </span>
            </td>
            <!-- Botón para eliminar categoría -->
            <td>
              <span class="btn btn-danger btn-sm" onclick="eliminarCategoria('<?php echo $idCategoria ?>')">
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
    $('#tablaCategoriasDT').DataTable();
  });
</script>