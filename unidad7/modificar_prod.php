<?php
include('recursos.php');
$productos->modificarProd($_POST['precio'], $_POST['codigo']);
header("Location: ../unidad7.php");
?>