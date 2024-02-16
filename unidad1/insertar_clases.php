<?php

$unidad_var=$_POST['unidad'];
$fecha_var= $_POST['fecha'];

include('../componentes/conexion.php');

mysqli_query($conexion, "INSERT INTO clases VALUES (DEFAULT, '$unidad_var', '$fecha_var')");

header("Location: ../unidad1.php?conexion");
?>