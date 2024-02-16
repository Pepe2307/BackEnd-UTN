<?php
include('contenido.php');
$correo = $_POST['email'];
$contrasena = password_hash($_POST['pass'], PASSWORD_DEFAULT, array('cost'=>4));
$rusuario->cargar_usuario($correo, $contrasena);
header("Location: ../unidad8.php?registro_exitoso");
?>