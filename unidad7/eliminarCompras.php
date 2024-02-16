<?php
include('recursos.php');
$productos->eliminarProdCompras($_GET['cod']);
header("Location: ../unidad7.php");
?>