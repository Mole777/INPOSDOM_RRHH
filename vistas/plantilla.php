<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>INPOSDOM</title>

  <!-- CSS -->

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- SweetAlert 2 -->
  <script src="vistas/plugins/sweetalert2/sweetalert2.all.js"></script>
   <!-- By default SweetAlert2 doesn't support IE. To enable IE 11 support, include Promise polyfill:-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

  <!-- SCRIPTS -->

  <script src="vistas/plugins/jquery/jquery.min.js"></script>
    <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="vistas/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="vistas/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vistas/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="vistas/plugins/jszip/jszip.min.js"></script>
    <script src="vistas/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="vistas/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="vistas/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="vistas/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="vistas/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="vistas/dist/js/adminlte.min.js"></script>
    <script src="vistas/dist/js/demo.js"></script>
    <!-- Funciones Personalidas-->
    <script src="vistas/scripts/funciones.js"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</head>
  
  <!-- Site wrapper -->
  
    <?php
    
      if (isset($_SESSION["IniciarSesion"]) && $_SESSION["IniciarSesion"] == "ok") {
        echo '<body class="hold-transition sidebar-mini">';
        echo '<div class="wrapper">';
        include_once "vistas/modulos/plantilla/header.php";
        include_once "vistas/modulos/plantilla/menu.php";

        if (isset($_GET["ruta"])) {
        
          if ($_GET["ruta"] == "designaciones" ||
              $_GET["ruta"] == "perfil" ||
              $_GET["ruta"] == "departamentos" ||
              $_GET["ruta"] == "salir"
              ) {
              
              include_once "vistas/modulos/".$_GET["ruta"].".php";

            }else{

              include_once "vistas/modulos/designaciones.php";

            }

        }else{

        include_once "vistas/modulos/designaciones.php";
        }

        include_once "vistas/modulos/plantilla/footer.php";

        echo '</div>';

      }else{
        echo '<body class="hold-transition sidebar-mini login-page">';
        include "vistas/modulos/login.php";
      }
       
        
    ?>


    
  <!-- JS -->
  <script src="vistas/js/departamento.js"></script>
    
  </body>
</html>
