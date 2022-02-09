/*=============================================
EDITAR DEPARTAMENTO
=============================================*/
$(".tablaPosicion").on("click", ".btnEditarPosicion", function(){

  var idPosicion = $(this).attr("idPosicion");

  var datos = new FormData();
  datos.append("idPosicion", idPosicion);


  $.ajax({

    url: "ajax/posicion.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function(respuesta){

      $("#editarIdPosicion").val(respuesta["Id"]);
      $("#editarNombrePosicion").val(respuesta["Nombre"]);
      

    }
  })

})



/*=============================================
ELIMINAR DEPARTAMENTO
=============================================*/

$(".tablaPosicion").on("click", ".btnEliminarPosicion", function(){
	
	var idPosicion = $(this).attr("idPosicion");

	Swal.fire({
        title: '¿Está seguro de borrar la posición?',
        text: '¡Si no lo está puede cancelar la acción!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Sí, borrar posición!'
      }).then(function(result){
        if (result.value) {
          
            window.location = "index.php?ruta=posiciones&idPosicion="+idPosicion;
        }

  })





})