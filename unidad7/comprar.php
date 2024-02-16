<?php
include('recursos.php');
/* $productos->comprarProd($_GET['cod'], $_GET['cod'], $_GET['cod'], $_GET['cod']); */

$GetProd = $productos->seleccion_UnProducto($_GET['cod']);
$productos->insertarProductoCompras
($GetProd[0]['codigo'], $GetProd[0]['producto'], $GetProd[0]['descripcion'], $GetProd[0]['precio']);

header("Location: ../unidad7.php");
?>