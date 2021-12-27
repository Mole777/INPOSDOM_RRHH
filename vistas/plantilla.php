<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SSOP</title>
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
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>
  
  <!-- Site wrapper -->
  
    <?php
    
      if (isset($_SESSION["IniciarSesion"]) && $_SESSION["IniciarSesion"] == "ok") {
        echo '<body class="hold-transition sidebar-mini">';
        echo '<div class="wrapper">';
        include_once "vistas/modulos/plantilla/header.php";
        include_once "vistas/modulos/plantilla/menu.php";

        if (isset($_GET["ruta"])) {
        
          if ($_GET["ruta"] == "nacional" ||
              $_GET["ruta"] == "internacional" ||
              $_GET["ruta"] == "bulto" ||
              $_GET["ruta"] == "reporte-despachos" ||
              $_GET["ruta"] == "salir" ||
              $_GET["ruta"] == "aviso" ||
              $_GET["ruta"] == "paquetes" ||
              $_GET["ruta"] == "numero-despacho" ||
              $_GET["ruta"] == "reporte-destino" ||
              $_GET["ruta"] == "recibo" ||
              $_GET["ruta"] == "tablilla" ||
              $_GET["ruta"] == "reporte-estadisticos" ||
              $_GET["ruta"] == "administrar-usuarios" ||
              $_GET["ruta"] == "administrar-servicios" ||
              $_GET["ruta"] == "administrar-plantilla" ||
              $_GET["ruta"] == "administrar-departamentos" ||
              $_GET["ruta"] == "perfil" ||
              $_GET["ruta"] == "certificado" ||
              $_GET["ruta"] == "colis" ||
              $_GET["ruta"] == "despacho") {
              
              include_once "vistas/modulos/".$_GET["ruta"].".php";

            }else{

              include_once "vistas/modulos/bulto.php";

            }

        }else{

        include_once "vistas/modulos/bulto.php";
        }

        include_once "vistas/modulos/plantilla/footer.php";

        echo '</div>';

      }else{
        echo '<body class="hold-transition sidebar-mini login-page">';
        include "vistas/modulos/login.php";
      }
       
        
    ?>


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

    
  </body>
</html>
