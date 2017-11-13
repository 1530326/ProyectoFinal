<?php
//variables para el registro de la venta
    $cliente = strtoupper($_POST['cliente']);
	$producto = strtoupper($_POST['producto']);
	$cantidad= $_POST['cantidad'];
	$fechaI = $_POST['datepicker'];
    $dias = $_POST['dias'];
	$precio = mysqli_query($conexion,"SELECT precio FROM productos WHERE nombre = '$producto'");
    $valor = mysqli_fetch_row($precio);
	$total = $cantidad*$valor[0];
//registrar venta
	$queryInsert = "INSERT INTO prestamos VALUES(null,'$cliente','$producto','$cantidad','$fechaI','$dias','$total')";
	$resultado = mysqli_query($conexion,$queryInsert);

    if($resultado){
    ?>
        <script>
            alertify.success("Préstamo guardado con exito");
        </script>
    <?php
    }else{
        ?>
            <script>
                alertify.error("Préstamo no guardado");
            </script>
        <?php
    }
?>