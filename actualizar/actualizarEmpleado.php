<?php
	require '../funciones.php';
	conectar();
	$idEmpleado=$_POST['idEmpleado'];
	$apePat=strtoupper($_POST['apePatU']);
	$apeMat=strtoupper($_POST['apeMatU']);
	$nombre=strtoupper($_POST['nombreU']);
	$calle=strtoupper($_POST['calleU']);
	$colonia=strtoupper($_POST['coloniaU']);
	$codPostal=$_POST['codPostalU'];
	$numero=$_POST['numeroU'];
	$telefono=$_POST['telefonoU'];
	$sueldo=$_POST['sueldoU'];
    $area=strtoupper($_POST['areaU']);
	
	//actualizar empleado
	$queryInsert1 = "UPDATE empleados SET nombre_empleado='$nombre', ape_paterno='$apePat', ape_materno='$apeMat', calle='$calle', colonia='$colonia', cod_postal='$codPostal', numero='$numero', telefono='$telefono', area='$area', sueldo='$sueldo'
	WHERE id='$idEmpleado'";
	echo $result= mysqli_query($conexion,$queryInsert1);		
	desconectar();
?>