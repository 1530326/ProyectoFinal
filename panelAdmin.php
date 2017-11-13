<?php
require 'funciones.php';
if(!sesionIniciada()){
    header('Location: login/iniciar_sesion.php');
}

conectar();
$usuario = getUsuario();

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

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="assets/css/metisMenu.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">
        
        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">
        
        <!--calendar css-->
        <link href="assets/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />
        
        <link href="assets/plugins/summernote/summernote.css" rel="stylesheet" />

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
                    <div class="container"><!-- dashboard -->
                        <div class="row">
							<div class="col-sm-12">
								<div class="card-box widget-inline">
									<div class="row">
										<div class="col-lg-3 col-sm-6">
											<div class="widget-inline-box text-center">
                                                <?php
                                                    conectar();
                                                    $sql = "SELECT * FROM empleados";
	                                                $result = mysqli_query($conexion,$sql);
	                                                $numero = mysqli_num_rows($result); 
                                                ?>
												<h3 class="m-t-10"><i class="text-primary fa fa-users"></i> <b data-plugin="counterup"><?php echo $numero ?></b></h3>
												<p class="text-muted">Empleados</p>
											</div>
										</div>

										<div class="col-lg-3 col-sm-6">
											<div class="widget-inline-box text-center">
                                                <?php
                                                    conectar();
                                                    $sql = "SELECT * FROM clientes";
	                                                $result = mysqli_query($conexion,$sql);
	                                                $numero = mysqli_num_rows($result); 
                                                ?>
												<h3 class="m-t-10"><i class="text-custom fa fa-users"></i> <b data-plugin="counterup"><?php echo $numero ?></b></h3>
												<p class="text-muted">Clientes</p>
											</div>
										</div>

										<div class="col-lg-3 col-sm-6">
											<div class="widget-inline-box text-center">
                                                <?php
                                                    conectar();
                                                    $sql = "SELECT * FROM proveedores";
	                                                $result = mysqli_query($conexion,$sql);
	                                                $numero = mysqli_num_rows($result); 
                                                ?>
												<h3 class="m-t-10"><i class="text-info fa fa-users"></i> <b data-plugin="counterup"><?php echo $numero ?></b></h3>
												<p class="text-muted">Proveedores</p>
											</div>
										</div>
                                        
                                        <div class="col-lg-3 col-sm-6">
											<div class="widget-inline-box text-center">
                                                <?php
                                                    conectar();
                                                    $sql = "SELECT * FROM productos";
	                                                $result = mysqli_query($conexion,$sql);
	                                                $numero = mysqli_num_rows($result); 
                                                ?>
												<h3 class="m-t-10"><i class="text-primary fa fa-users"></i> <b data-plugin="counterup"><?php echo $numero ?></b></h3>
												<p class="text-muted">Productos</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <!--end row -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="m-t-0">Compra-Venta</h4>
                                    <div class="text-center">
                                        <ul class="list-inline chart-detail-list">
                                            <li>
                                                <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-primary"></i>Compras</h5>
                                            </li>
                                            <li>
                                                <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-info"></i>Ventas</h5>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="dashboard-line-chart" style="height: 300px;"></div>
                                </div>
                            </div> <!-- end col -->
                            
                             <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="m-t-0">Pérdidas</h4>
                                    <div id="website-stats" style="height: 320px;" class="flot-chart"></div>
                                </div>
                            </div> <!-- end col -->
                            
                        </div> <!-- end row -->
                        
                        <div class="row">
                            <div class="col-md-3 col-sm-6 text-center">
                                <div class="p-20 m-b-20">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-bgColor="#ebeff2" data-fgColor="#188ae2" data-displayInput=false value="35"/>
                                    <h6 class="text-muted m-t-10">Empleados</h6>
                                </div>
                            </div><!-- end col-->
                            <div class="col-md-3 col-sm-6 text-center">
                                <div class="p-20 m-b-20">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-cursor=true
                                           data-fgColor="#4bd396" value="29"/>
                                    <h6 class="text-muted m-t-10">Clientes</h6>
                                </div>
                            </div><!-- end col-->
                            <div class="col-md-3 col-sm-6 text-center">
                                <div class="p-20 m-b-20">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-min="-100"
                                           data-fgColor="#3ac9d6" data-displayPrevious=true value="44"/>
                                    <h6 class="text-muted m-t-10">Proveedores</h6>
                                </div>
                            </div><!-- end col-->
                            <div class="col-md-3 col-sm-6 text-center">
                                <div class="p-20 m-b-20">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-min="-100"
                                           data-fgColor="#f9c851" data-displayPrevious=true data-angleOffset=-125
                                           data-angleArc=250 value="44"/>
                                    <h6 class="text-muted m-t-10">Productos</h6>
                                </div>
                            </div><!-- end col-->
                        </div>


                        <div class="row">
                            <h4>Préstamos</h4>
                            <div class="col-md-8">
                                <div id="calendar"></div>
                            </div> <!-- end col -->
                            <div class="col-sm-4">
                                <div class="timeline timeline-left">
                                    <article class="timeline-item alt">
                                        <div class="text-left">
                                            <div class="time-show first">
                                                <a href="#" class="btn btn-custom">Este mes</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow"></span>
                                                    <span class="timeline-icon"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                    <h4 class="">13-Noviembre</h4>
                                                    <p class="timeline-date text-muted"><small>06:25 pm</small></p>
                                                    <p>El préstamo con ID 1 se ha efectuado al cliente con el ID 2, dando un total de días para pagar de 10.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item ">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow"></span>
                                                    <span class="timeline-icon bg-success"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                    <h4 class="text-success">16-Noviembre</h4>
                                                    <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                    <p>El préstamo con ID 2 se ha efectuado al cliente con el ID 4, dando un total de días para pagar de 8.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        
                        <div class="">
                            <h4 class="m-b-10 m-t-0 header-title">Notas</h4>
				                <div class="summernote">
								</div>
                        </div>


                    </div>
                    <!-- end container -->
                    <div class="footer">
                        <div>
                            <strong>Simple Admin</strong> - Copyright &copy; 2017
                        </div>
                    </div> <!-- end footer -->

                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!--Morris Chart-->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
		<script src="assets/pages/jquery.dashboard.js"></script>
        
        <!-- BEGIN PAGE SCRIPTS -->
        <script src="assets/plugins/moment/moment.js"></script>
        <script src='assets/plugins/fullcalendar/js/fullcalendar.min.js'></script>
        <script src="assets/pages/jquery.fullcalendar.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>
        
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!--Morris Chart-->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/raphael/raphael-min.js"></script>
		<script src="assets/pages/jquery.morris.init.js"></script>
        
                <!-- Flot chart -->
        <script src="assets/plugins/flot-chart/jquery.flot.min.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.selection.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.stack.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.orderBars.min.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.crosshair.js"></script>
        <script src="assets/pages/jquery.flot.init.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $('[data-plugin="knob"]').each(function(idx, obj) {
                $(this).knob();
             });
        </script>
        
        
        <script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script type="text/javascript" src="assets/plugins/parsleyjs/parsley.min.js"></script>

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