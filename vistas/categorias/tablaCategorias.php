<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      
      <table class="table table-hover table-condensed">

        <thead>
          <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td></td>
            <td></td>
            <!-- Botón para actualizar categoría -->
            <td>
              <span class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalActualizarCategoria">
                <i class="fas fa-pen"></i>
              </span>
            </td>
            <!-- Botón para eliminar categoría -->
            <td>
              <span class="btn btn-danger btn-sm" onclick="eliminarCategoria()">
                <i class="fas fa-trash"></i>
              </span>
            </td>
          </tr>
        </tbody>

      </table>

    </div>
  </div>
</div>