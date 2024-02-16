<?php
include("conexion.php"); 
$id_borrar = $_GET['borrar_dato'];
mysqli_query($conexion, "DELETE FROM clases WHERE id_clase = '$id_borrar'"); 
header('Location: ../unidad1.php');
?>
