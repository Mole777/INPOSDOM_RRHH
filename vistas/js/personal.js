/*=============================================
EDITAR DESIGNACION
=============================================*/
$(".tablaPersonal").on("click", ".btnEditarPersonal", function(e){

  e.preventDefault();

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

      $("#editarIdPersonal").val(respuesta["Id"]);
      $("#editarNombrePersonal").val(respuesta["Nombre"]);
      $("#editarApellidoPersonal").val(respuesta["Apellido"]);
      $("#editarDocumentoPersonal").val(respuesta["Documento"]);
      $("#editarTelefonoPersonal").val(respuesta["Telefono"]);
      $("#editarCorreoPersonal").val(respuesta["Correo"]);
      $("#editarDireccionPersonal").val(respuesta["Direccion"]);
      $("#editarFechaIngresoPersonal").val(respuesta["Fecha_Ingreso"]);
      $("#editarSalarioPersonal").val(respuesta["Salario"]);

      $("#selectDepartamentoPersonal"+respuesta["DepartamentoID"]).removeAttr("selected", true);
      $("#selectDepartamentoPersonal"+respuesta["DepartamentoID"]).attr("selected", true);

      $("#selectPosicionPersonal"+respuesta["PosicionID"]).removeAttr("selected", true);
      $("#selectPosicionPersonal"+respuesta["PosicionID"]).attr("selected", true);

      $("#selectSexoPersonal"+respuesta["Sexo"]).removeAttr("selected", true);
      $("#selectSexoPersonal"+respuesta["Sexo"]).attr("selected", true);

      $("#tipoDocumento"+respuesta["DocumentoID"]).removeAttr("selected", true);
      $("#tipoDocumento"+respuesta["DocumentoID"]).attr("selected", true);     

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
