<?php 
session_start();
include("../componentes/conexion.php"); 
$traer_consultas=mysqli_query($conexion, "SELECT * FROM consultas");


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$consulta = $_POST['consulta'];
$codigo = $_POST['captcha_text'];

if ($codigo == $_SESSION['captcha']){
    /* echo "Codigo Correcto"; */
    header("Location: ../unidad5.php?cargado");
    mysqli_query($conexion, "INSERT INTO consultas VALUES (DEFAULT, '$nombre', '$apellido'
    , '$mail', '$consulta')");
} else{
    /* echo "Codigo INCORRECTO"; */
    header("Location: ../unidad5.php?captcha_error");
}
?>