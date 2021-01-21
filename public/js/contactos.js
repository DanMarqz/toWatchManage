$(document).ready(function(){
  $('#cargaTablaContactos').load('vistas/contactos/tablaContactos.php');
});

function eliminarContacto(){
  swal({
    title: "¿Estás seguro de eliminar este contacto?",
    text: "Una vez se elimine al contacto se perderán todos los datos.",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      swal("El contacto se ha eliminado correctamente.", {
        icon: "success",
      });
    }
  });  
}