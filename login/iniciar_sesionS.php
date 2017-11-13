<?php
require '../funciones.php';
$usuario = $_POST['usuario'];
$clave = $_POST['password'];

conectar();

if(validarLogin($usuario,$clave)){
    header('Location:../panelAdmin.php');
}
else{
?>
    <script>
        alert('Los datos ingresados son incorrectos');
        location.href = "../index.html";
    </script>
<?php
    desconectar();
}
?>