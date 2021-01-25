<!-- Modal -->
<div class="modal fade" id="modalActualizarContacto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar un contacto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="" id="frmAgregarContactoU">

        <input type="text" name="idContacto" id="idContacto" hidden="">

        <!-- Apellido del contacto -->
        <label for="apellidoContactoU">Apellido del contacto</label>
        <input type="text" id="apellidoContactoU" name="apellidoContactoU" class="form-control">

        <!-- Nombre del contacto -->
        <label for="nombreContactoU">Nombre del contacto</label>
        <input type="text" id="nombreContactoU" name="nombreContactoU" class="form-control">

        <!-- Telefono del contacto -->
        <label for="telefonoContactoU">Teléfono del contacto</label>
        <input type="text" id="telefonoContactoU" name="telefonoContactoU" class="form-control">

        <!-- email del contacto -->
        <label for="emailContactoU">Email del contacto</label>
        <input type="text" id="emailContactoU" name="emailContactoU" class="form-control">

          <!-- categoría del contacto -->
          <div id="categoriasIdU"></div>

        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Actualizar</button>
      </div>

    </div>
  </div>

</div>