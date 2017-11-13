<?php
//variables para el registro de la venta
	$producto = strtoupper($_POST['producto']);
	$cantidad= $_POST['cantidad'];
	$fecha = $_POST['datepicker'];
    $hora = $_POST['timepicker'];
	$precio = mysqli_query($conexion,"SELECT precio FROM productos WHERE nombre = '$producto'");
    $valor = mysqli_fetch_row($precio);
	$total = $cantidad*$valor[0];
//registrar venta
	$queryInsert = "INSERT INTO ventas VALUES(null,'$producto','$cantidad','$fecha','$hora','$total')";
	$resultado = mysqli_query($conexion,$queryInsert);

    if($resultado){
    ?>
        <script>
            alertify.success("Venta guardada con exito");
        </script>
    <?php
    }else{
        ?>
            <script>
                alertify.error("Venta no guardada");
            </script>
        <?php
    }
?>