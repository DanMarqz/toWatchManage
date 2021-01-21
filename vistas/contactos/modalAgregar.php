<!-- Modal -->
<div class="modal fade" id="modalAgregarContacto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar un contacto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="" id="frmAgregarContacto">

        <!-- Apellido del contacto -->
        <label for="apellidoContacto">Apellido del contacto</label>
        <input type="text" id="apellidoContacto" name="apellidoContacto" class="form-control">

        <!-- Nombre del contacto -->
        <label for="nombreContacto">Nombre del contacto</label>
        <input type="text" id="nombreContacto" name="nombreContacto" class="form-control">

        <!-- Telefono del contacto -->
        <label for="telefonoContacto">Teléfono del contacto</label>
        <input type="text" id="telefonoContacto" name="telefonoContacto" class="form-control">

        <!-- email del contacto -->
        <label for="emailContacto">Email del contacto</label>
        <input type="text" id="emailContacto" name="emailContacto" class="form-control">

        <!-- categoría del contacto -->
        <label for="categoriaContacto">Categoría del contacto</label>
        <input type="text" id="categoriaContacto" name="categoriaContacto" class="form-control">

        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Actualizar</button>
      </div>

    </div>
  </div>

</div>