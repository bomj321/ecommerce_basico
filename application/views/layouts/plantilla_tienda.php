<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <!-- Meta, title, CSS, favicons, etc. -->
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta http-equiv = "cache-control" content = "no-cache" />
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
     <!--FUENTES DE LETRAS E ICONOS-->
        <link href="https://fonts.googleapis.com/css?family=Gugi|Mogra" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!--FUENTES DE LETRAS E ICONOS-->

    <link href="<?php echo base_url();?>public/app_tienda.css" rel="stylesheet">

    <title>ecommerce,ropa,zapatos,camisas</title>
  </head>
  <body>
    <div class="container-fluid pl-0 pr-0">
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

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>public/app_tienda.js"></script>

  </body>
</html>