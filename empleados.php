<?php
require 'funciones.php';
if(!sesionIniciada()){
    header('Location: logins/login_admin.php');
}

conectar();
$usuario = getUsuario();
$empleado = getEmpleado();
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
        
        <script src="alertify/alertify.min.js"></script>
        <script src="js/gestionar.js"></script>
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
                                <li><a href="#">Nosotros</a></li>
                                <li><a href="#">Ayuda</a></li>
                                <li><a href="#">Contacto</a></li>
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
                                    <a href="#" data-target="#" class="dropdown-toggle menu-right-item" data-toggle="dropdown" aria-expanded="true">
                                        <i class="mdi mdi-bell"></i> <span class="label label-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu p-0 dropdown-menu-lg">
                                        <!--<li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>-->
                                        <li class="list-group notification-list" style="height: 267px;">
                                           <div class="slimscroll">
                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-diamond bg-primary"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-cog bg-warning"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">New settings</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-bell-o bg-custom"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">Updates</h5>
                                                        <p class="m-0">
                                                            <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-user-plus bg-danger"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">New user registered</h5>
                                                        <p class="m-0">
                                                            <small>You have 10 unread messages</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                                <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-diamond bg-primary"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-cog bg-warning"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">New settings</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>
                                           </div>
                                        </li>
                                        <!--<li>-->
                                            <!--<a href="javascript:void(0);" class="list-group-item text-right">-->
                                                <!--<small class="font-600">See all notifications</small>-->
                                            <!--</a>-->
                                        <!--</li>-->
                                    </ul>
                                </li>

                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="img/user.png" alt="user-img" class="img-circle"> </a>
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
                                    <img src="img/user.png" alt="" class="thumb-md img-circle">
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
                            <div class="col-lg-16">
                                <div class="p-20 m-b-20">
                                    <div class="encabezados">
                                        <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Empleados</h2>
                                    </div>
                                    <div align="right">
                                        <a class= "btn btn-custom btn-rounded" type="button" data-toggle="modal" data-target="#agregar"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar nuevo</a>
                                    </div>
                                    <br>
                                    <div class="col-md-16">
                                        <div class="panel panel-default">
                                            <div class="table-responsive">
                                                <table id="datatable-keytable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Nombre</th>
                                                            <th>Apellido Paterno</th>
                                                            <th>Apellido Materno</th>
                                                            <th>Dirección</th>
                                                            <th>Teléfono</th>
                                                            <th>Area</th>
                                                            <th>Sueldo</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <?php foreach($empleado as $emp):
									                       $datos=
                                                           $emp[0]."||".
										                   $emp[1]."||".
									                       $emp[2]."||".
										                   $emp[3]."||".
										                   $emp[4]."||".
									                       $emp[5]."||".
										                   $emp[6]."||".
										                   $emp[7]."||".
									                       $emp[8]."||".
                                                           $emp[9]."||".
										                   $emp[10];
								                    ?>
                                                    <tbody>
                                                    <tr>
                                                        <td><?php echo $emp[0]?></td>
                                                        <td><?php echo $emp[1]?></td>
                                                        <td><?php echo $emp[2]?></td>
                                                        <td><?php echo $emp[3]?></td>
                                                        <td><?php echo $emp[4], ' ', $emp[5], ' ', $emp[6], ' ', $emp[7]?></td>
                                                        <td><?php echo $emp[8]?></td>
                                                        <td><?php echo $emp[9]?></td>
                                                        <td><?php echo $emp[10]?></td>
                        <td><a class="btn btn-icon btn-primary" type="button" data-toggle="modal" data-target="#modificar" onclick="agregaformEmpleado('<?php echo $datos ?>')">
				        <span class="fa fa-wrench" aria-hidden="true"></span></a> 
				        <a class="btn btn-icon btn-danger" onclick="preguntarSiNoEmpleado('<?php echo $emp[0] ?>')"><span class="fa fa-remove" aria-hidden="true"></span></a></td>
                                                    </tr>
                                                    <?php endforeach ?> 
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->

                    <div class="footer">
                        <div class="pull-right hidden-xs">
                            Project Completed <strong class="text-custom">39%</strong>.
                        </div>
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
        
        <!-- Agregar empleado-->
        <div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Agregar empleado</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nombre(s)</label>
                                <input type="text" class="form-control" placeholder="Nombre(s)" name="nombre">
                            </div>
                            <div class="form-group">
                                <label>Apellido Paterno</label>
                                <input type="text" class="form-control" placeholder="Apellido Paterno" name="apePat">
                            </div>
                            <div class="form-group">
                                <label>Apellido Materno</label>
                                <input type="text" class="form-control" placeholder="Apellido Materno" name="apeMat">
                            </div>
                            <div class="form-group">
                                <label>Calle</label>
                                <input type="text" class="form-control" placeholder="Calle" name="calle">
                            </div>
                            <div class="form-group">
                                <label>Colonia</label>
                                <input type="text" class="form-control" placeholder="Colonia" name="colonia">
                            </div>
                            <div class="form-group">
                                <label>Código postal</label>
                                <input type="text" class="form-control" placeholder="Cod. Postal" name="codPostal">
                            </div>
						    <div class="form-group">
                                <label>Número</label>
                                <input type="text" class="form-control" placeholder="Número" name="numero">
                            </div>
                            <div class="form-group">
                                <label>Telefono</label>
                                <input type="text" class="form-control" placeholder="Teléfono" name="telefono">
                            </div>
                            <div class="form-group">
                                <label>Sueldo</label>
                                <input type="text" class="form-control" placeholder="Sueldo" name="sueldo">
                            </div>
                            <div class="form-group">
                                <label>Área</label>
                                <select name="area" class="form-control">
								    <option>TORTILLERIA</option>
								    <option>PISO</option>
								    <option>CAJA</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-default" name="cancelar">Cancelar</button>
                                <button type="submit" class="btn btn-primary" name="guardar">Guardar</button>
                            </div>
                        </div>
                    </form>
                    
                    <?php
                        if(isset($_POST['guardar'])){
                            conectar();
                            require ("registrar/registrarEmpleado.php");
                            desconectar();
                        }
                    ?>
            </div>
        </div>
    </div>
        
    <!-- modificar empleado-->
    <div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Modificar empleado</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nombre(s)</label>
                                <input type="text" hidden="" id="idEmpleado" name=""/>
                                <input type="text" class="form-control" placeholder="Nombre(s)" name="nombreU">
                            </div>
                            <div class="form-group">
                                <label>Apellido Paterno</label>
                                <input type="text" class="form-control" placeholder="Apellido Paterno" name="apePatU">
                            </div>
                            <div class="form-group">
                                <label>Apellido Materno</label>
                                <input type="text" class="form-control" placeholder="Apellido Materno" name="" id="apeMatU">
                            </div>
                            <div class="form-group">
                                <label>Calle</label>
                                <input type="text" class="form-control" placeholder="Calle" name="calleU">
                            </div>
                            <div class="form-group">
                                <label>Colonia</label>
                                <input type="text" class="form-control" placeholder="Colonia" name="coloniaU">
                            </div>
                            <div class="form-group">
                                <label>Código postal</label>
                                <input type="text" class="form-control" placeholder="Cod. Postal" name="codPostalU">
                            </div>
						    <div class="form-group">
                                <label>Número</label>
                                <input type="text" class="form-control" placeholder="Número" name="numeroU">
                            </div>
                            <div class="form-group">
                                <label>Telefono</label>
                                <input type="text" class="form-control" placeholder="Teléfono" name="telefonoU">
                            </div>
                            <div class="form-group">
                                <label>Sueldo</label>
                                <input type="text" class="form-control" placeholder="Sueldo" name="sueldoU">
                            </div>
                            <div class="form-group">
                                <label>Área</label>
                                <select name="areaU" class="form-control">
								    <option>TORTILLERIA</option>
								    <option>PISO</option>
								    <option>CAJA</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-default" name="cancelar">Cancelar</button>
                                <button type="submit" class="btn btn-primary" id="actualiza">Guardar</button>
                            </div>
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

        <!--Morris Chart-->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
		<script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>
    </body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#actualiza').click(function(){
			actualizaEmpleado();
		});
	});
</script>