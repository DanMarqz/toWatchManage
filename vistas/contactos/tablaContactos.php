<?php
  require_once "../../clases/Conexion.php";
  $con = new Conexion();
  $conexion = $con->conectar();

  $sql = "SELECT
            contactos.apellido AS apellido,
            contactos.nombre AS nombre,
            contactos.telefono AS telefono,
            contactos.email AS email,
            categorias.nombre AS categoria,
            contactos.id_contacto AS idContacto
          FROM
            t_contactos AS contactos
          INNER JOIN
            t_categorias AS categorias
          ON
            contactos.id_categoria = categorias.id_categoria";

  $result = mysqli_query($conexion, $sql);


?>

<div class="card">
  <div class="card-body">
    <div class="table-responsive">

      <table class="table table-hover table-condensed" id="tablaContactosDT">

        <thead>
          <tr>
            <th>Apellido</th>
            <th>Nombres</th>
            <th>Teléfono</th>
            <th>Email</th>
            <th>Categoría</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>

        <tbody>

        <?php
        while($mostrar = mysqli_fetch_array($result)){
          $idContacto = $mostrar['idContacto'];
        ?>

          <tr>
            <td><?php echo$mostrar['apellido'] ?></td>
            <td><?php echo$mostrar['nombre'] ?></td>
            <td><?php echo$mostrar['telefono'] ?></td>
            <td><?php echo$mostrar['email'] ?></td>
            <td><?php echo$mostrar['categoria'] ?></td>
    <!-- Botón actualizar contacto -->
            <td>
              <span class="btn btn-warning btn-sm" onclick="obtenerDatosContacto('<?php echo $idContacto ?>')" data-bs-toggle="modal" data-bs-target="#modalActualizarContacto">
                <i class="fas fa-user-edit"></i>
              </span>
            </td>
      <!-- Botón eliminar contacto -->
            <td>
              <span class="btn btn-danger btn-sm" onclick="eliminarContacto('<?php echo $idContacto ?>')">
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
    $('#tablaContactosDT').DataTable();
  });
</script>