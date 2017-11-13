<?php
//variables para el registro del producto
	$nombre = strtoupper($_POST['nombre']);
	$descripcion = strtoupper($_POST['descripcion']);
	$cantidad= $_POST['cantidad'];
	$categoria = strtoupper($_POST['categoria']);
	$proveedor = strtoupper($_POST['proveedor']);
    $precio = $_POST['precio'];
	
    $name = $_FILES['imagenP']['name'];
    $ruta1 = $_FILES['imagenP']['tmp_name'];
	$destino1 = "registrar/imagenes/".$name;
	
	copy($ruta1,$destino1);
    //registrar producto
	$queryInsert = "INSERT INTO productos VALUES(null,'$nombre',	'$descripcion','$categoria','$cantidad','$proveedor','$destino1','$precio')";
	$resultado = mysqli_query($conexion,$queryInsert);

    if($resultado){
    ?>
        <script>
            alertify.success("Producto guardado con exito");
        </script>
    <?php
    }else{
        ?>
            <script>
                alertify.error("Producto no guardado");
            </script>
        <?php
    }
?>