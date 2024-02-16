<?php
include('bases_de_datos.php');
include('productos.php');

define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('PASS', '');
define('BASE', 'phpavanzado');


$base = new Basesdedatos(SERVIDOR, USUARIO, PASS, BASE);
$productos = new Productos($base)
?>