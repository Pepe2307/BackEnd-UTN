<?php
include('./recursos.php');

$productos->insertarProducto($_POST['nombre'], $_POST['descripcion'], $_POST['precio']);

header("Location: ../unidad7.php?ok_carga");
?>