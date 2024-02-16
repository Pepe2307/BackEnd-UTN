<?php
include('contenido.php');
$contrasena = $_POST['pass'];
$correo = $_POST['email'];
$consultar_datos = $rusuario->verificar_usuario($correo);
$verificar = password_verify($contrasena, $consultar_datos[0]['contrasena']); 

if($verificar) {
    session_start();
    $_SESSION['email'] = $correo;
    header("Location: ../unidad8.php?ingreso_exitoso");
} else {
    header("Location: ../unidad8.php?error_contrasena");
}
?>