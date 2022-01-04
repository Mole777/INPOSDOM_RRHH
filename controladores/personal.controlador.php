<?php

class ctrPersonal{

	public function ctrCrearPersonal(){

		if (exist($_POST["guardar"])) {
			
			if (!empty($_POST["regNombre"], $_POST["regApellido"]) {
				 
				 session_destroy();

				 echo '<script>

						window.location = "login";

					   </script>';
				
				 header("Refresh:0");

			}else{
				
				echo 'Error';
			}

		}
	}

}