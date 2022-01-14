/*=============================================
EDITAR DESIGNACION
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

      console.log("respuesta", respuesta);

      $("#editarIdDesignacion").val(respuesta["Id"]);
      $("#editarNombreDesignacion").val(respuesta["Nombre"]);
      $("#editarApellidoDesignacion").val(respuesta["Apellido"]);
      $("#editarCedulaDesignacion").val(respuesta["Cedula"]);
      $("#editarTelefonoDesignacion").val(respuesta["Telefono"]);
      $("#editarCorreoDesignacion").val(respuesta["Correo"]);
      $("#editarDireccionDesignacion").val(respuesta["Direccion"]);
      $("#editarFechaIngresoDesignacion").val(respuesta["Fecha_Ingreso"]);
      $("#editarSalarioDesignacion").val(respuesta["Salario"]);

      $("#selectDepartamentoDesignacion").html(respuesta["Departamento"]);
      $("#selectDepartamentoDesignacion").val(respuesta["DepartamentoID"]);
      $("#selectDepartamentoDesignacion").attr("selected", true);

      $("#selectPosicionDesignacion").html(respuesta["Posicion"]);
      $("#selectPosicionDesignacion").val(respuesta["PosicionID"]);
      $("#selectPosicionDesignacion").attr("selected", true);

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
