<?php
include('recursos.php');
$productos->eliminarProd($_GET['cod']);
header("Location: ../unidad7.php");
?>