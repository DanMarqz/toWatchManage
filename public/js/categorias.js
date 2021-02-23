$(document).ready(function(){

  $('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');

  $('#btnGuardarCategoria').click(function(){
    agregarCategoria()
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
        swal(':)','Categoría agregada con éxito','success');
      } else {
        swal(':(','Hubo un error al agregar la nueva categoría','error');
        console.log(respuesta);
      }
    }
  });
}

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