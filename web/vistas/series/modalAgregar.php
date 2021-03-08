<!-- Modal -->
<div class="modal fade" id="modalAgregarSerie" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Series</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="" id="frmAgregarSerie">

          <!-- nombre del Serie -->
          <label for="nombreSerie">Series name</label>
          <input type="text" id="nombreSerie" name="nombreSerie" class="form-control">

          <!-- temporada del Serie -->
          <label for="temporadaSerie">Series season</label>
          <input type="text" id="temporadaSerie" name="temporadaSerie" class="form-control">

          <!-- episodio del Serie -->
          <label for="episodioSerie">Series episode</label>
          <input type="text" id="episodioSerie" name="episodioSerie" class="form-control">

          <!-- url del Serie -->
          <label for="urlSerie">Series URL</label>
          <input type="text" id="urlSerie" name="urlSerie" class="form-control">

        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-info" id="btnAgregarSerie">Add</button>
      </div>

    </div>
  </div>

</div>