<?php
//variables para el registro del proveedor
	$nombre = strtoupper($_POST['nombre']);
	$calle = strtoupper($_POST['calle']);
	$numero= $_POST['numero'];
	$colonia = strtoupper($_POST['colonia']);
	$codP = $_POST['codPostal'];
	$telefono = strtoupper($_POST['telefono']);
	$correo = $_POST['correo'];
	
//registrar cliente
	$queryInsert = "INSERT INTO proveedores VALUES(null,'$nombre',	'$calle','$colonia','$codP','$numero','$telefono','$correo')";
	$resultado = mysqli_query($conexion,$queryInsert);

    if($resultado){
    ?>
        <script>
            alertify.success("Proveedor guardado con exito");
        </script>
    <?php
    }else{
        ?>
            <script>
                alertify.error("Proveedor no guardado");
            </script>
        <?php
    }
?>