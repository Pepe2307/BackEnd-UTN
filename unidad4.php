<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilos.css">
    <style>
        .imagen {
            max-width: 700px;
            max-height: 700px;
            width: auto;
            height: auto;
        }
    </style>
</head>

<body>

<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	
        <nav>
            <?php include("botonera.php"); ?>
        </nav>

	</header>

	
    <section>
		<h2>Imágenes con PHP</h2>

        <?php

        if (imagetypes() & IMG_GIF ) {
            echo "<p> El tipo GIF esta soportado por la librería GD</p>";
        } else {
            echo "<p> El tipo GIF <strong>NO</strong> esta soportado por la librería GD</p>";
        }

        ?>


        <h2>Imágen con marca de agua generada con PHP</h2>
        <img src="./unidad4/marca_de_agua.php" class="imagen">


        <?php include("./unidad4/thumbnail.php") ?>
        <img src="./unidad4_v2.jpg" class="imagen" />


	</section>



    <aside>
        <p>En este archivo se utilizan herramientas para crear imagenes con PHP, por ejemplo creando una nueva con marca de agua a base de una imagen previa</p>
    </aside>

	<!-- <footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer> -->

</div>
</body>
</html>