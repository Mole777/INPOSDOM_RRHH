/*=============================================
EDITAR Designacion
=============================================*/
$(".tablaDesignacion").on("click", ".btnEditarDesignacion", function(){

  var idDesignacion = $(this).attr("idDesignacion");

  var datos = new FormData();
  datos.append("idDesignacion", idDesignacion);

  $.ajax({

    url: "ajax/designacion.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function(respuesta){

      $("#editarIdDesignacion").val(respuesta["Id"]);
      $("#editarNombreDesignacion").val(respuesta["Nombre"]);
      $("#editarApellidoDesignacion").val(respuesta["Apellido"]);
      $("#editarCedulaDesignacion").val(respuesta["Cedula"]);
      $("#editarTelefonoDesignacion").val(respuesta["Telefono"]);
      $("#editarCorreoDesignacion").val(respuesta["Correo"]);
      $("#editarDepartamentoDesignacion").html(respuesta["Departamento"]);
      $("#editarDireccionDesignacion").val(respuesta["Direccion"]);
      $("#editarFechaIngresoDesignacion").val(respuesta["Fecha_Ingreso"]);
      $("#editarPosicionDesignacion").val(respuesta["Posicion"]);
      $("#editarSalarioDesignacion").val(respuesta["Salario"]);
    }
  })

});
  

/*=============================================
ELIMINAR DESIGNACION
=============================================*/

$(".tablaDesignacion").on("click", ".btnEliminarDesignacion", function(){

	var idDesignacion = $(this).attr("idDesignacion");

	Swal.fire({
		  title: '¿Está seguro de borrar la designación?',
		  text: '¡Si no lo está puede cancelar la acción!',
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Sí, borrar designación!'
		}).then(function(result){
		  
		  if (result.value) {

		  	window.location = "index.php?ruta=designaciones&idDesignacion="+idDesignacion;
		    
		  }
	})
});