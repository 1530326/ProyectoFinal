<?php
require 'funciones.php';
if(!sesionIniciada()){
    header('Location: logins/login_admin.php');
}

conectar();
$usuario = getUsuario();
$venta = getVenta();
$producto = getProducto();
desconectar();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>SuperFacil - Administracion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="img/favicon.png">

        <!-- DataTables -->
        <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="assets/css/metisMenu.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="css/misEstilos.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="alertify/css/alertify.css" >
	    <link rel="stylesheet" type="text/css" href="alertify/css/themes/default.css" >
        
        <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
		<link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
		<link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
		<link href="assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
		<link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/gestionar.js"></script>
        <script src="alertify/alertify.min.js"></script>
        <link href="assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    </head>


    <body>

        <div id="page-wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                        <a href="index.html" >
                            <img src="img/logo.png" alt="logo" height="60" style="padding-top:10px;"/>
                        </a>
                    </div>
                </div>

                <!-- Top navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">

                            <!-- Mobile menu button -->
                            <div class="pull-left">
                                <button type="button" class="button-menu-mobile visible-xs visible-sm">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <!-- Top nav left menu -->
                            <ul class="nav navbar-nav hidden-sm hidden-xs top-navbar-items">
                                <li><a href="perfil.php">Perfil</a></li>
                                <li><a href="ayuda.php">Ayuda</a></li>
                                <li><a href="contacto.php">Contacto</a></li>
                            </ul>

                            <!-- Top nav Right menu -->
                            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                                <li class="hidden-xs">
                                    <form role="search" class="navbar-left app-search pull-left">
                                         <input type="text" placeholder="Buscar..." class="form-control">
                                         <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </li>

                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo $usuario[4]?>" alt="" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="perfil.php"><i class="ti-user m-r-10"></i> Perfil</a></li>
                                        <li><a href="index.html"><i class="ti-power-off m-r-10"></i> Salir</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end container -->
                </div> <!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- Page content start -->
            <div class="page-contentbar">

                <!--left navigation start-->
                <aside class="sidebar-navigation">
                    <div class="scrollbar-wrapper">
                        <div>
                            <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                                <i class="mdi mdi-close"></i>
                            </button>
                            <!-- User Detail box -->
                            <div class="user-details">
                                <div class="pull-left">
                                    <img src="<?php echo $usuario[4]?>" alt="" class="thumb-md img-circle">
                                </div>
                                <div class="user-info">
                                    <a><?php echo $usuario[1]?></a>
                                    <p class="text-muted m-0"><?php echo $usuario[3]?></p>
                                </div>
                            </div>
                            <!--- End User Detail box -->

                            <!-- Left Menu Start -->
                            <ul class="metisMenu nav" id="side-menu">
                                <li><a href="panelAdmin.php"><i class="fa fa-home"></i> Dashboard </a></li>
                                <li><a href="empleados.php"><i class="fa fa-user" aria-hidden="true"></i>Empleados</a></li>
                                <li><a href="clientes.php"><i class="fa fa-user" aria-hidden="true"></i>Clientes</a></li>
                                <li><a href="proveedores.php"><i class="fa fa-user" aria-hidden="true"></i>Proveedores</a></li>
                                <li><a href="productos.php"><i class="fa fa-briefcase" aria-hidden="true"></i>Productos</a></li>
                                <li><a href="ventas.php"><i class="fa fa-money" aria-hidden="true"></i>Ventas</a></li>
                                <li><a href="compras.php"><i class="fa fa-money" aria-hidden="true"></i>Compras</a></li>
                                <li><a href="prestamos.php"><i class="fa fa-money" aria-hidden="true"></i>Préstamos</a></li>
                                <li><a href="usuarios.php"><i class="fa fa-user" aria-hidden="true"></i>Usuarios</a></li>

                                
                            </ul>
                        </div>
                    </div><!--Scrollbar wrapper-->
                </aside>
                <!--left navigation end-->

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="header-title m-t-0">Ayuda</h4>
                            </div>
                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="p-20">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="text-center">
                                                <h3 class="font-600">Preguntas frecuentes</h3>
                                                <p class="text-muted"> Aquí podrás encontrar las preguntas frecuentes que se realizan dentro de nuestro panel de Administración, si tienes preguntas que su respuesta no está aquí no dudes en contactarnos</p>

                                                <a href="contacto.php"><button type="button" class="btn btn-success m-t-12">Contactar</button></a>

                                            </div>
                                        </div><!-- end col -->
                                    </div><!-- end row -->


                                    <div class="row m-t-30">
                                        <div class="col-md-5 col-md-offset-1">
                                            <div class="p-20">
                                                <!-- Question/Answer -->
                                                <div class="m-b-30">
                                                    <h5 class="question">¿Empleados?</h5>
                                                    <p class="answer">Lorem Ipsum is simply dummy text of the printing
                                                        and typesetting industry. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s.</p>
                                                </div>

                                                <!-- Question/Answer -->

                                                <div class="m-b-30">
                                                    <h5 class="question">¿Clientes?</h5>
                                                    <p class="answer">Lorem ipsum dolor sit amet, in mea nonumes
                                                        dissentias dissentiunt, pro te solet oratio iriure. Cu sit
                                                        consetetur moderatius intellegam, ius decore accusamus te. Ne
                                                        primis suavitate disputando nam. Mutat convenirete.</p>
                                                </div>

                                                <!-- Question/Answer -->

                                                <div class="m-b-30">
                                                    <h5 class="question">¿Proveedores?</h5>
                                                    <p class="answer">Lorem Ipsum is simply dummy text of the printing
                                                        and typesetting industry. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s.</p>
                                                </div>

                                                <!-- Question/Answer -->
                                                <div class="m-b-30">
                                                    <h5 class="question">¿Productos?</h5>
                                                    <p class="answer">Lorem Ipsum is simply dummy text of the printing
                                                        and typesetting industry. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s.</p>
                                                </div>

                                            </div>

                                        </div>
                                        <!--/col-md-5 -->

                                        <div class="col-md-5">

                                            <div class="p-20">
                                                <!-- Question/Answer -->
                                                <div class="m-b-30">
                                                    <h5 class="question">¿Ventas?</h5>
                                                    <p class="answer">Lorem Ipsum is simply dummy text of the printing
                                                        and typesetting industry. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s.</p>
                                                </div>

                                                <!-- Question/Answer -->

                                                <div class="m-b-30">
                                                    <h5 class="question">¿Compras?</h5>
                                                    <p class="answer">Lorem ipsum dolor sit amet, in mea nonumes
                                                        dissentias dissentiunt, pro te solet oratio iriure. Cu sit
                                                        consetetur moderatius intellegam, ius decore accusamus te. Ne
                                                        primis suavitate disputando nam. Mutat convenirete.</p>
                                                </div>

                                                <!-- Question/Answer -->

                                                <div class="m-b-30">
                                                    <h5 class="question">¿Préstamos?</h5>
                                                    <p class="answer">Lorem Ipsum is simply dummy text of the printing
                                                        and typesetting industry. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s.</p>
                                                </div>

                                                <!-- Question/Answer -->
                                                <div class="m-b-30">
                                                    <h5 class="question">¿Usuarios?</h5>
                                                    <p class="answer">Lorem Ipsum is simply dummy text of the printing
                                                        and typesetting industry. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s.</p>
                                                </div>
                                            </div>

                                        </div>
                                        <!--/col-md-5-->
                                    </div>
                                    <!-- end row -->

                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end container -->

                    <div class="footer">
                        <div>
                            <strong>Simple Admin</strong> - Copyright &copy; 2017
                        </div>
                    </div> <!-- end footer -->

                </div>
                <!-- End #page-right-content -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        

        <script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script type="text/javascript" src="assets/plugins/parsleyjs/parsley.min.js"></script>

        <script src="assets/plugins/moment/moment.js"></script>
     	<script src="assets/plugins/timepicker/bootstrap-timepicker.js"></script>
     	<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
     	<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
     	<script src="assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
     	<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="assets/plugins/summernote/summernote.min.js"></script>

        <!-- form advanced init js -->
        <script src="assets/pages/jquery.form-advanced.init.js"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('.form-validation').parsley();
                $('.summernote').summernote({
                    height: 350,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
            });
        </script>
    </body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#actualiza').click(function(){
			actualizaCliente();
		});
	});
</script>