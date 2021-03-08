$(document).ready(function(){

  $('#cargaTablaPeliculas').load('vistas/peliculas/tablaPeliculas.php');

  $('#btnGuardarPelicula').click(function(){

    if($('#nombrePelicula').val() == ""){
      swal("You have not indicated a name for the film",{icon: "warning"});
        return false;
    }

    agregarPelicula()
  });

  $('#btnActualizarPelicula').click(function(){
    actualizarPelicula()
  });

});

function agregarPelicula(){
  $.ajax({
    type:'POST',
    data:$('#frmAgregarPelicula').serialize(),
    url:'procesos/peliculas/agregarPelicula.php',
    success:function(respuesta){
      respuesta = respuesta.trim();

      if (respuesta == 1) {
        $('#frmAgregarPelicula')[0].reset();
        $('#cargaTablaPeliculas').load('vistas/peliculas/tablaPeliculas.php');
        $('#modalAgregarPelicula').modal("toggle");
        swal("Movie successfully added.", {
          icon: "success",
        });
      } else {
        swal("There was an error adding the new Movie.", {
          icon: "error",
        });
      }
    }
  });
}

function eliminarPelicula(idPelicula){
  swal({
    title: "Are you sure to delete this movie?",
    text: "Once the movie is deleted, the data cannot be recovered.",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      $.ajax({
        type: "POST",
        data: "idPelicula=" + idPelicula,
        url: "procesos/peliculas/eliminarPelicula.php",
        success:function(respuesta){
          respuesta = respuesta.trim();

          if (respuesta == 1) {
            $('#cargaTablaPeliculas').load('vistas/peliculas/tablaPeliculas.php');
            swal("The movie has been successfully deleted.", {
              icon: "success",
            });
          } else {
            swal("There was an error deleting the movie.", {
              icon: "error",
            });
          }
        }
      });
    }
  });
}

function obtenerDatosPelicula(idPelicula) {

  $.ajax({
    type:"POST",
    data:"idPelicula=" + idPelicula,
    url:"procesos/peliculas/obtenerDatosPelicula.php",
    success:function(respuesta){
      respuesta = jQuery.parseJSON(respuesta);

      $('#idPelicula').val(respuesta['idPelicula']);
      $('#nombrePeliculaU').val(respuesta['nombre']);
      $('#urlU').val(respuesta['url']);
    }

  });
}

function actualizarPelicula(){
  $.ajax({
    type:'POST',
    data:$('#frmAgregarPeliculaU').serialize(),
    url:'procesos/peliculas/actualizarPelicula.php',
    success:function(respuesta){
      respuesta = respuesta.trim();

      if (respuesta == 1) {
        $('#cargaTablaPeliculas').load('vistas/peliculas/tablaPeliculas.php');
        $('#modalActualizarPelicula').modal("toggle");
        swal("Successfully updated movie.", {
          icon: "success",
        });
      } else {
        swal("There was an error updating the movie.", {
          icon: "error",
        });
      }
    }
  });
}
