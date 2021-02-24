$(document).ready(function(){

  $('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');

  $('#btnGuardarCategoria').click(function(){

    if($('#nombreCategoria').val() == ""){
      swal("Debes indicar un nombre de categoría",{icon: "warning"});
        return false;
    }

    agregarCategoria()
  });

  $('#btnActualizarCategoria').click(function(){
    actualizarCategoria()
  });

});

function agregarCategoria(){
  $.ajax({
    type:'POST',
    data:$('#frmAgregarCategoria').serialize(),
    url:'procesos/categorias/agregarCategoria.php',
    success:function(respuesta){
      respuesta = respuesta.trim();

      if (respuesta == 1) {
        $('#frmAgregarCategoria')[0].reset();
        $('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
        $('#modalAgregarCategoria').modal("toggle");
        swal("Categoría agregada con éxito.", {
          icon: "success",
        });
      } else {
        swal("Hubo un error al agregar la nueva categoría.", {
          icon: "error",
        });
      }
    }
  });
}

function eliminarCategoria(idCategoria){
  swal({
    title: "¿Estás seguro de eliminar esta categoría?",
    text: "Una vez se elimine la categoría los datos no podrán ser recuperados.",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      $.ajax({
        type: "POST",
        data: "idCategoria=" + idCategoria,
        url: "procesos/categorias/eliminarCategoria.php",
        success:function(respuesta){
          respuesta = respuesta.trim();

          if (respuesta == 1) {
            $('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
            swal("La categoría se ha eliminado correctamente.", {
              icon: "success",
            });
          } else {
            swal("Hubo un error al eliminar la categoría.", {
              icon: "error",
            });
          }
        }
      });
    }
  });
}

function obtenerDatosCategoria(idCategoria) {

  $.ajax({
    type:"POST",
    data:"idCategoria=" + idCategoria,
    url:"procesos/categorias/obtenerDatosCategoria.php",
    success:function(respuesta){
      respuesta = jQuery.parseJSON(respuesta);

      $('#idCategoria').val(respuesta['idCategoria']);
      $('#nombreCategoriaU').val(respuesta['nombre']);
      $('#descripcionU').val(respuesta['descripcion']);
    }

  });
}

function actualizarCategoria(){
  $.ajax({
    type:'POST',
    data:$('#frmAgregarCategoriaU').serialize(),
    url:'procesos/categorias/actualizarCategoria.php',
    success:function(respuesta){
      respuesta = respuesta.trim();

      if (respuesta == 1) {
        $('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
        $('#modalActualizarCategoria').modal("toggle");
        swal("Categoría actualizada con éxito.", {
          icon: "success",
        });
      } else {
        swal("Hubo un error al actualizar la categoría.", {
          icon: "error",
        });
      }
    }
  });
}
