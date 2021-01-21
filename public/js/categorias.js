$(document).ready(function(){
  $('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
});

function eliminarCategoria(){
  swal({
    title: "¿Estás seguro de eliminar esta categoría?",
    text: "Una vez se elimine la categoría los datos no podrán ser recuperados.",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      swal("La categoría se ha eliminado correctamente.", {
        icon: "success",
      });
    }
  });  
}