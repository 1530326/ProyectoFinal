<?php
$conexion = null;
$user;
    
function conectar(){
    global $conexion;
    $conexion = mysqli_connect("localhost","root","","tienda");

    mysqli_set_charset($conexion, 'utf8');
}

function desconectar(){
    global $conexion;
    mysqli_close($conexion);
}

function validarLogin($usuario,$clave){
    global $user;
	conectar();
    global $conexion;
    $consulta = "SELECT * FROM usuarios WHERE nombre_usuario='".$usuario."' AND contraseña='".$clave."'";
    $respuesta = mysqli_query($conexion,$consulta);
    
    if($fila = mysqli_fetch_row($respuesta)){
        session_start();
        $_SESSION['usuario'] = $usuario;
        $user=$fila;
        return true;
    }
    return false;
	desconectar();
}

function sesionIniciada(){
    session_start();
    return isset($_SESSION['usuario']);
}

function getUsuario(){
    global $conexion;
    $res = mysqli_query($conexion,"SELECT * FROM usuarios WHERE contraseña='".$_SESSION['usuario']."'");
    return mysqli_fetch_array($res);
}

function getEmpleado(){
    global $conexion;
    $respuesta = mysqli_query($conexion,"SELECT * FROM empleados");
    return $respuesta->fetch_all();
}
?>






























