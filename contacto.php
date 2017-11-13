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

        <!-- jvectormap -->
        <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

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
        <link href="assets/plugins/summernote/summernote.css" rel="stylesheet" />
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
                                        <li><a href="javascript:void(0)"><i class="ti-user m-r-10"></i> Perfil</a></li>
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
                                <h4 class="header-title m-t-0 m-b-20">Contacto</h4>
                            </div>
                        </div> <!-- end row -->


                        <div class="row">
                        	<div class="col-md-4">
                        		<div class="text-center card-box">
                                    <div class="clearfix"></div>
                                    <div class="member-card">
                                        <span class="user-badge bg-warning">Creadora</span>
                                        <div class="thumb-xl member-thumb m-b-10 center-block">
                                            <img src="img/creadora.jpg" class="img-circle img-thumbnail" alt="profile-image">
                                            <i class="mdi mdi-information-outline member-star text-success" title="verified user"></i>
                                        </div>

                                        <div class="">
                                            <h4 class="m-b-5">Angela Carrizales</h4>
                                            <p class="text-muted">@UPV <span> | </span> <span> <a href="#" class="text-pink">15030326@upv.edu.mx</a> </span></p>
                                        </div>

                                        <p class="text-muted font-13">
                                            Hola, soy Angela Carrizales, desarrolladora del panel Administrativo, soy estudiante de la carrera de Ing. de Tecnologías de la Información, cualquier duda contáctame por mi correo.
                                        </p>

                                        <button class="btn btn-default btn-sm m-t-10" type="button" data-toggle="modal" data-target="#contacto">Enviar mensaje</button>
                                        <ul class="social-links list-inline m-t-30">
                                            <li>
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                            </li>
                                        </ul>

                                    </div>

                                </div>

                            </div> <!-- end col -->
                            
                            <div class="col-md-8">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7305.16628049482!2d-99.08270071288993!3d23.726575980722693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x867951bd5407d2a9%3A0x1dfa01b571fe2685!2sUniversidad+Polit%C3%A9cnica+de+Victoria!5e0!3m2!1ses!2smx!4v1510550675831" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div> <!-- end col -->
                    </div>
                    <!-- end container -->

                    <div class="footer">
                        <div>
                            <strong>Simple Admin</strong> - Copyright &copy; 2017
                        </div>
                    </div> <!-- end footer -->

                </div>
                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->
        
        <!-- contacto-->
        <div class="modal fade" id="contacto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Asunto</label>
                            <div>
                                <input type="text" id="example-email" name="example-email" class="form-control" placeholder="Asunto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Enviar a</label>
                                <div>
                                    <input type="text" class="form-control" value="1530326@upv.edu.mx">
                                </div>
                        </div>
                        <div class="form-group">
                            <label>De</label>
                            <div>
                                <input type="text" class="form-control" value="alguien@example.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                            <h4 class="m-b-10 m-t-0 header-title">Mensaje</h4>
				                <div class="summernote">
								</div>
                            </div>
                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-default" name="cancelar">Cancelar</button>
                                <button type="submit" class="btn btn-primary" name="guardar">Enviar</button>
                        </div>
                </form>
            </div>
        </div>
    </div>

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

        <!-- google maps api -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <!-- Gmaps file -->
        <script src="assets/plugins/gmaps/gmaps.min.js"></script>

        <!-- Google map Init -->
        <script src="assets/pages/jquery.gmaps.js"></script>

        <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="assets/plugins/jvectormap/gdp-data.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-au-mill.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-us-il-chicago-mill-en.js"></script>
            
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!--Morris Chart-->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/raphael/raphael-min.js"></script>
        
        <script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script type="text/javascript" src="assets/plugins/parsleyjs/parsley.min.js"></script>


        <!-- Dashboard init -->
		<script src="assets/pages/jquery.dashboard.js"></script>
        
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>
        
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