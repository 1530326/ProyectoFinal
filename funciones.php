<?php
$conexion = null;
$user;
    
function conectar(){
    global $conexion;
    $conexion = mysqli_connect("localhost","root","Judith_2806","tienda");

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

function getCliente(){
    global $conexion;
    $respuesta = mysqli_query($conexion,"SELECT * FROM clientes");
    return $respuesta->fetch_all();
}

function getProveedor(){
    global $conexion;
    $respuesta = mysqli_query($conexion,"SELECT * FROM proveedores");
    return $respuesta->fetch_all();
}

function getProducto(){
    global $conexion;
    $respuesta = mysqli_query($conexion,"SELECT * FROM productos");
    return $respuesta->fetch_all();
}

function getCategoria(){
    global $conexion;
    $respuesta = mysqli_query($conexion,"SELECT DISTINCT categoria FROM productos");
    return $respuesta->fetch_all();
}

function getVenta(){
    global $conexion;
    $respuesta = mysqli_query($conexion,"SELECT * FROM ventas");
    return $respuesta->fetch_all();
}

function getCompra(){
    global $conexion;
    $respuesta = mysqli_query($conexion,"SELECT * FROM compras");
    return $respuesta->fetch_all();
}

function getPrestamo(){
    global $conexion;
    $respuesta = mysqli_query($conexion,"SELECT * FROM prestamos");
    return $respuesta->fetch_all();
}
?>






























