<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <!-- Meta, title, CSS, favicons, etc. -->
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">

<!--CODIGO PARA EVITAR EL CACHE SOLO PARA DESARROLLO-->
 <!-- <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">-->
<!--CODIGO PARA EVITAR EL CACHE SOLO PARA DESARROLLO-->


     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
     <!--FUENTES DE LETRAS E ICONOS-->
        <link href="https://fonts.googleapis.com/css?family=Gugi|Mogra" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!--FUENTES DE LETRAS E ICONOS-->

    <!--CSS DATATABLE-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.2/css/responsive.bootstrap4.min.css"/>

    <!--CSS DATATABLE Y ALERTAS TOASTR-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="<?php echo base_url();?>public/app_tienda.css" rel="stylesheet">

    <title>ecommerce,ropa,zapatos,camisas</title>
  </head>
  <body>
    <div class="container-fluid p-0 contenido_pagina">
     <!--HEADER DE LA PAGINA-->
    <?php include 'header_tienda.php'; ?>
     <!--HEADER DE LA PAGINA-->


    <!--CONTENIDO DE LA PAGINA-->
        <?php echo $content_for_layout; ?>
    <!--CONTENIDO DE LA PAGINA-->

    <!--FOOTER DE LA PAGINA-->
    <?php include 'footer_tienda.php'; ?>
    <!--FOOTER DE LA PAGINA-->


    </div>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!--SCRIPT DATATABLE-->
  <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.2/js/dataTables.responsive.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.2/js/responsive.bootstrap4.min.js"></script>
<!--SCRIPT DATATABLE-->

<!--SCRIPT PERSONALES Y DE TOASTR-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
  <script src="<?php echo base_url();?>public/app_tienda.js"></script>
<!--SCRIPT PERSONALES Y DE TOASTR-->

  </body>
</html>
