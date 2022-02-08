/*=============================================
EDITAR DESIGNACION
=============================================*/
$(".tablaPersonal").on("click", ".btnEditarPersonal", function(){

  var idPersonal = $(this).attr("idPersonal");

  var datos = new FormData();
  datos.append("idPersonal", idPersonal);

  $.ajax({

    url: "ajax/personal.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function(respuesta){

      console.log("respuesta", respuesta);

      $("#editarIdPersonal").val(respuesta["Id"]);
      $("#editarNombrePersonal").val(respuesta["Nombre"]);
      $("#editarApellidoPersonal").val(respuesta["Apellido"]);
      $("#editarCedulaPersonal").val(respuesta["Cedula"]);
      $("#editarTelefonoPersonal").val(respuesta["Telefono"]);
      $("#editarCorreoPersonal").val(respuesta["Correo"]);
      $("#editarDireccionPersonal").val(respuesta["Direccion"]);
      $("#editarFechaIngresoPersonal").val(respuesta["Fecha_Ingreso"]);
      $("#editarSalarioPersonal").val(respuesta["Salario"]);

      $("#selectDepartamentoPersonal").html(respuesta["Departamento"]);
      $("#selectDepartamentoPersonal").val(respuesta["DepartamentoID"]);
      $("#selectDepartamentoPersonal").attr("selected", true);

      $("#selectPosicionPersonal").html(respuesta["Posicion"]);
      $("#selectPosicionPersonal").val(respuesta["PosicionID"]);
      $("#selectPosicionPersonal").attr("selected", true);


      if (respuesta["Sexo"] == 'M') {

        $("#editarSexoPersonal").html(respuesta["Masculino"]);

      }else if(respuesta["Sexo"] == 'F'){
    
        $("#editarSexoPersonal").html(respuesta["Femenino"]);
        
      }

    }
    
  })

});
  

/*=============================================
ELIMINAR DESIGNACION
=============================================*/

$(".tablaPersonal").on("click", ".btnEliminarPersonal", function(){

	var idPersonal = $(this).attr("idPersonal");

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

		  	window.location = "index.php?ruta=accion-personal&idPersonal="+idPersonal;
		    
		  }
	})
});

/*=============================================
HABILITAR DOCUMENTO
=============================================*/
