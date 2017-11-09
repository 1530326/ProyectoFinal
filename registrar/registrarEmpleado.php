<?php
//variables para el registro del empleado
	$apePat = strtoupper($_POST['apePat']);
	$apeMat = strtoupper($_POST['apeMat']);
	$nombre = strtoupper($_POST['nombre']);
	$calle = strtoupper($_POST['calle']);
	$numero= $_POST['numero'];
	$colonia = strtoupper($_POST['colonia']);
	$codP = $_POST['codPostal'];
	$telefono = strtoupper($_POST['telefono']);
	$sueldo = $_POST['sueldo'];
    $area = strtoupper($_POST['area']);
	
//registrar empleado
	$queryInsert = "INSERT INTO empleados VALUES(null,'$nombre','$apePat','$apeMat',	'$calle','$colonia','$codP','$numero','$telefono','$area','$sueldo')";
	$resultado = mysqli_query($conexion,$queryInsert);

    if($resultado){
    ?>
        <script>
            alertify.success("Empleado guardado con exito");
        </script>
    <?php
    }else{
        ?>
            <script>
                alertify.error("Empleado no guardado");
            </script>
        <?php
    }
?>