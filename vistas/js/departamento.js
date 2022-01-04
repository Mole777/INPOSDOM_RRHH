/*=============================================
ELIMINAR DEPARTAMENTO
=============================================*/

$(".tablaDepartamento").on("click", ".btnEliminarDepartamento", function(){
	
	var idDepartamento = $(this).attr("idEliminarDepartamento");

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