<?php
$nombre = $_POST['nombre'];
$contra1 = $_POST['contra1'];
$contra2 = $_POST['contra2'];
$tipo = $_POST['tipo'];

$name = $_FILES['imagenU']['name'];
$ruta1 = $_FILES['imagenU']['tmp_name'];
$destino1 = "registrar/imagenesUsuario/".$name;
	
copy($ruta1,$destino1);

if($contra1==$contra2){
    $insertar = "INSERT INTO usuarios VALUES(NULL,'$nombre','$contra1','$tipo','$destino1')";
    $resultado = mysqli_query($conexion,$insertar);
    if($resultado){
    ?>
        <script>
            alertify.success("Usuario guardado con exito");
        </script>
    <?php
    }else{
        ?>
            <script>
                alertify.error("Usuario no guardado");
            </script>
        <?php
    }
}else{
?>
    <script>
        alertify.error("Las contraseñas no coinciden");
    </script>
<?php
}
?>