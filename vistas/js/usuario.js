/*=============================================
EDITAR USUARIO
=============================================*/
$(".tablaUsuarios").on("click", ".btnEditarUsuario", function(){

	var idUsuario = $(this).attr("idUsuario");

	var datos = new FormData();
	datos.append("idUsuario", idUsuario);

	$.ajax({

		url: "ajax/usuario.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){

			console.log("respuesta", respuesta);

		}

	})

})


/*=============================================
ELIMINAR USUARIO
=============================================*/

$(".tablaUsuarios").on("click", ".btnEliminarUsuario", function(){
	
	var idUsuario = $(this).attr("idUsuario");

	Swal.fire({
        title: '¿Está seguro de borrar el usuario?',
        text: '¡Si no lo está puede cancelar la acción!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Sí, borrar usuario!'
      }).then(function(result){
        if (result.value) {
          
            window.location = "index.php?ruta=administrador-usuarios&idUsuario="+idUsuario;
        }
  })

})