/*=============================================
EDITAR DEPARTAMENTO
=============================================*/
$(".tablaDepartamento").on("click", ".btnEditarDepartamento", function(){

  var idDepartamento = $(this).attr("idDepartamento");

  var datos = new FormData();
  datos.append("idDepartamento", idDepartamento);


  $.ajax({

    url: "ajax/departamento.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function(respuesta){

      $("#editarIdDepartamento").val(respuesta["Id"]);
      $("#editarNombreDepartamento").val(respuesta["Nombre"]);

    }
  })

})



/*=============================================
ELIMINAR DEPARTAMENTO
=============================================*/

$(".tablaDepartamento").on("click", ".btnEliminarDepartamento", function(){
	
	var idDepartamento = $(this).attr("idDepartamento");

	Swal.fire({
        title: '¿Está seguro de borrar el departamento?',
        text: '¡Si no lo está puede cancelar la acción!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Sí, borrar departamento!'
      }).then(function(result){
        if (result.value) {
          
            window.location = "index.php?ruta=departamentos&idDepartamento="+idDepartamento;
        }

  })





})