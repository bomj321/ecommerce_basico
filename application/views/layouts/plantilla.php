<!DOCTYPE html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv = "cache-control" content = "no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gesti&oacute;n Interna</title>

    <!-- Bootstr<?php echo base_url();?>-->
    <link href="<?php echo base_url();?>public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>public/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>public/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url();?>public/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url();?>public/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>public/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

     <!-- Datatables -->
    <link href="<?php echo base_url();?>public/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>public/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>public/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>public/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>public/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
     <!-- Datatables -->

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>public/build/css/custom.min.css" rel="stylesheet">

    <!--FUENTES DE LETRAS-->
    <link href="https://fonts.googleapis.com/css?family=Gugi|Mogra" rel="stylesheet">
    <!--FUENTES DE LETRAS-->

    <link href="<?php echo base_url();?>public/app.css" rel="stylesheet">



</head>





<body class="nav-md">
 <!-----------------------------------ASIDE Y HEADER--------------------------------------------->
   <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url(); ?>dashboard" class="site_title"><i class="fa fa-euro"></i><span>Ecommerce Esp.</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url();?>public/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2><?php echo $this->session->userdata("nombre_persona")?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                        <li><a><i class="fa fa-tags"></i> Ropa <span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li><a href="<?php echo base_url();?>ropa/list/">Control de Prendas</a></li>
                          </ul>
                        </li>
                    <li><a><i class="fa fa-user"></i> Usuarios<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                          <!--<li><a href="<?php echo base_url();?>billetes/list">Billetes</a></li>-->
                        <li><a href="<?php echo base_url();?>usuario/list">Control de Usuario</a></li>
                      </ul>
                    </li>

                   <li><a><i class="fa fa-envelope"></i> Email<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                       <!--<li><a href="<?php echo base_url();?>collectionb/list">Colecci&oacute;n de Billetes</a></li>-->
                      <li><a href="<?php echo base_url();?>email/list">Control de Emails</a></li>
                    </ul>
                  </li>


                  <li><a><i class="fa fa-list-alt"></i> Menus <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     <!-- <li><a href="<?php echo base_url();?>mercadob/list">Billetes</a></li>-->
                     <li><a href="<?php echo base_url();?>menu/menu">Control de Menus</a></li>
                      <li><a href="<?php echo base_url();?>menu/submenu">Control de SubMenus</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-money"></i> Pagos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>pago/list">Listado de Pagos</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-line-chart"></i> M&aacute;s vendidos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>pago/list_products">Listado de Productos</a></li>
                    </ul>
                  </li>


                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url();?>public/images/img.jpg" alt=""><?php echo $this->session->userdata("nombre_persona")?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo base_url(); ?>login/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>


              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
<!-----------------------------------ASIDE Y HEADER--------------------------------------------->
 <!----------------------------------------page content AQUI EMPIEZA EL CONTENIDO DE LA PAGINA-->

          <?php echo $content_for_layout; ?>
        <!------------------------------------- /page content AQUI TERMINA EL CONTENIDO DE LA PAGINA-->



<!-------------------------------------------FOOTER------------------------------------>
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

 <!-- jQuery -->
    <script src="<?php echo base_url();?>public/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Highcharts -->
    <script src="<?php echo base_url();?>public/highcharts.js"></script>
    <script src="<?php echo base_url();?>public/exporting.js"></script>
    <script src="<?php echo base_url();?>public/jquery.print.js"></script>

    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>public/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>public/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url();?>public/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url();?>public/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url();?>public/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>public/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url();?>public/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url();?>public/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>public/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>public/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url();?>public/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url();?>public/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url();?>public/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url();?>public/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url();?>public/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url();?>public/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url();?>public/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url();?>public/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>public/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src="<?php echo base_url();?>public/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url();?>public/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!--ALERTAS PERSONALIZADAS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>public/build/js/custom.min.js"></script>
    <!--GRAFICAS-->
    <script src="https://cdnjs.com/libraries/Chart.js"></script>
    <!--GRAFICAS-->

    <!--Scripts Personalizados-->
     <script src="<?php echo base_url();?>public/app.js"></script>



</body>
</html>
<!-------------------------------------------FOOTER------------------------------------>
