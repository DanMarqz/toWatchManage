$(document).ready(function(){
  $('#cargaTablaSeries').load('vistas/series/tablaSeries.php');

  $('#btnAgregarSerie').click(function(){

      if ($('#nombreSerie').val() == ""){
        swal("You have not indicated a name for the serie",{icon:"warning"});
        return false;
      }

    agregarSerie();
  });

  $('#btnActualizarSerie').click(function(){
    actualizarSerie();
  });

});

function agregarSerie(){
  $.ajax({
    type: "POST",
    url: "procesos/series/agregarSerie.php",
    data: $('#frmAgregarSerie').serialize(),
    success:function(respuesta) {
      respuesta = respuesta.trim();

      if (respuesta == 1) {
        $('#frmAgregarSerie')[0].reset();
        $('#cargaTablaSeries').load('vistas/series/tablaSeries.php');
        $('#modalAgregarSerie').modal("toggle");
        swal("Serie successfully added.", {
          icon: "success",
        });
      } else {
        swal("There was an error adding the new serie.", {
          icon: "error",
        });
      }
    }
  });

}

function actualizarSerie(){
  $.ajax({
    type: "POST",
    url: "procesos/series/actualizarSerie.php",
    data: $('#frmAgregarSerieU').serialize(),
    success:function(respuesta) {
      respuesta = respuesta.trim();

      if (respuesta == 1) {
        $('#cargaTablaSeries').load('vistas/series/tablaSeries.php');
        $('#modalActualizarSerie').modal("toggle");
        swal("Successfully updated serie.", {
          icon: "success",
        });
      } else {
        swal("There was an error updating the serie.", {
          icon: "error",
        });
      }
    }
  });
}


function eliminarSerie(idSerie){
  swal({
    title: "Are you sure to delete this serie?",
    text: "Once the serie is deleted, the data cannot be recovered.",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      $.ajax({
        type: "POST",
        data: "idSerie=" + idSerie,
        url: "procesos/series/eliminarSerie.php",
        success:function(respuesta){
          respuesta = respuesta.trim();

          if (respuesta == 1) {
            $('#cargaTablaSeries').load('vistas/series/tablaSeries.php');
            swal("This serie has been successfully deleted.", {
              icon: "success",
            });
          }
          else {
            swal("There was an error deleting the serie.", {
              icon: "error",
            });
          }
        }

      });
    }
  });
}

function obtenerDatosSerie(idSerie){
  $.ajax({
    type: "POST",
    data: "idSerie=" + idSerie,
    url: "procesos/series/obtenerDatosSerie.php",
    success: function(respuesta){
      respuesta = jQuery.parseJSON(respuesta);

      $('#nombreSerieU').val(respuesta['nombre']);
      $('#temporadaSerieU').val(respuesta['temporada']);
      $('#episodioSerieU').val(respuesta['episodio']);
      $('#urlSerieU').val(respuesta['url']);
      $('#idSerieU').val(respuesta['id_serie'])

    }
  })
}