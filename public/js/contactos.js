$(document).ready(function(){
  $('#cargaTablaContactos').load('vistas/contactos/tablaContactos.php');

  $('#btnAgregarContacto').click(function(){

      if($('#idCategoriaselect').val() == 0){
        swal("Debes seleccionar una categoría",{icon: "warning"});
        return false;
      } else if ($('#nombreContacto').val() == ""){
        swal("Debes agregar el nombre del contacto",{icon:"warning"});
        return false;
      }

    agregarContacto();
  });

  $('#btnActualizarContacto').click(function(){
    actualizarContacto();
  });

});

function agregarContacto(){
  $.ajax({
    type: "POST",
    url: "procesos/contactos/agregarContacto.php",
    data: $('#frmAgregarContacto').serialize(),
    success:function(respuesta) {
      respuesta = respuesta.trim();

      if (respuesta == 1) {
        $('#frmAgregarContacto')[0].reset();
        $('#cargaTablaContactos').load('vistas/contactos/tablaContactos.php');
        $('#modalAgregarContacto').modal("toggle");
        swal("El contacto se ha agregado con éxito.", {
          icon: "success",
        });
      } else {
        swal("Hubo un error al agregar el nuevo contacto.", {
          icon: "error",
        });
      }
    }
  });

}

function actualizarContacto(){
  $.ajax({
    type: "POST",
    url: "procesos/contactos/actualizarContacto.php",
    data: $('#frmAgregarContactoU').serialize(),
    success:function(respuesta) {
      respuesta = respuesta.trim();

      if (respuesta == 1) {
        $('#cargaTablaContactos').load('vistas/contactos/tablaContactos.php');
        $('#modalActualizarContacto').modal("toggle");
        swal("El contacto se actualizó con éxito.", {
          icon: "success",
        });
      } else {
        swal("Hubo un error al actualizar el contacto.", {
          icon: "error",
        });
      }
    }
  });
}


function eliminarContacto(idContacto){
  swal({
    title: "¿Estás seguro de eliminar este contacto?",
    text: "Una vez se elimine al contacto se perderán todos los datos.",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      $.ajax({
        type: "POST",
        data: "idContacto=" + idContacto,
        url: "procesos/contactos/eliminarContacto.php",
        success:function(respuesta){
          respuesta = respuesta.trim();

          if (respuesta == 1) {
            $('#cargaTablaContactos').load('vistas/contactos/tablaContactos.php');
            swal("El contacto se ha eliminado correctamente.", {
              icon: "success",
            });
          }
          else {
            swal("Hubo un error al eliminar el contacto.", {
              icon: "error",
            });
          }
        }

      });
    }
  });
}

function obtenerDatosContacto(idContacto){
  $.ajax({
    type: "POST",
    data: "idContacto=" + idContacto,
    url: "procesos/contactos/obtenerDatosContacto.php",
    success: function(respuesta){
      respuesta = jQuery.parseJSON(respuesta);
      idCategoria = respuesta['id_categoria'];

      $('#apellidoContactoU').val(respuesta['apellido']);
      $('#nombreContactoU').val(respuesta['nombre']);
      $('#telefonoContactoU').val(respuesta['telefono']);
      $('#emailContactoU').val(respuesta['email']);
      $('#idContactoU').val(respuesta['id_contacto'])

      $('#categoriasIdU').load("vistas/contactos/selectCategoriasUpdate.php?idCategoria=" + idCategoria);

    }
  })
}