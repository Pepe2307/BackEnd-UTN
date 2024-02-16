<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilos.css">
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
		<h2>Comentarios</h2>


        <form action="unidad3/comentarios.php" method="POST" class="form_unidad">

            <div class="form-example">
                <label for="nombre">Nombre y Apellido: </label>
                <input type="text" name="nombre" id="nombre" required maxlength="30"/>
            </div>

            <div class="form-example">
                <label for="mail">Mail: </label>
                <input type="mail" name="mail" id="mail" required />
            </div>

            <div class="form-example">
                <label for="comentario">Comentario: </label>
                <input type="text" name="comentario" id="comentario" required />
            </div>

            <div class="form_submit">
                <input type="submit" value="Enviar!" />
            </div>

        </form>

        <?php
        if (isset($_GET['cargado'])) { ?>

            <div class="mensaje">
                <?php
                    echo "<p>Cargado!!</p>"
                ?>
            </div>
        <?php } ?>


        <?php
        $mostrarContenido = isset($_GET['mostrar']) ? $_GET['mostrar'] : false;
        ?>
        <button onclick="toggleContenido()">Mostrar/Esconder Contenido</button>

        <div id="contenido" style="display: <?php echo $mostrarContenido ? 'block' : 'none'; ?>">
            <?php include("./unidad3/comentarios.txt"); ?>
        </div>

        <script>
            function toggleContenido() {
                var contenido = document.getElementById("contenido");
                var estadoActual = contenido.style.display;
                contenido.style.display = (estadoActual === "none" || estadoActual === "") ? "block" : "none";
            }
        </script>


	</section>



	<aside>
        <p>Ingresamos datos que se cargan tanto en la web como en una tabla de MySql junto con la fecha en la que se cargaron los datos</p>
    </aside>

	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>

</div>
</body>
</html>