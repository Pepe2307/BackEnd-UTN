<?php
include './clases/basededatos.php';
include './clases/registros.php';
include('datos_base.php');

$base = new BD(SERVIDOR, USUARIO, PASS, BASE);
$rusuario = new Registros($base);
?>