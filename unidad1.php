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
		<h2>Agenda de clases</h2>

        <form action="./unidad1/insertar_clases.php" method="POST" class="form_unidad">
            <div class="form-example">
                <label for="unidad">Unidad: </label>
                <input type="text" name="unidad" id="unidad" required maxlenght="30"/>
            </div>
            <div class="form-example">
                <label for="fecha">Fecha: </label>
                <input type="date" name="fecha" id="fecha" required />
            </div>
            <!-- <input type="text" name="fecha" placeholder="fecha" id="fecha2" required maxlenght="30" required /> -->
            <div class="form_submit">
                <input type="submit" value="Enviar!" />
            </div>
        </form>

        <?php
        if(isset($_GET['conexion'])){  ?>
            <div class="mensaje">
                ¡Los datos se cargaron correctamente!
            </div>
        <?php } ?>





        <?php
        $mostrarContenido = isset($_GET['mostrar']) ? $_GET['mostrar'] : false;
        ?>

        <button onclick="toggleContenido()">Mostrar/Esconder Contenido</button>
        <div id="contenido" style="display: <?php echo $mostrarContenido ? 'block' : 'none'; ?>">
            <?php include("./unidad1/ver_clases.php"); ?>
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
        <p>Vinculamos el archivo PHP con una database de MySql y los datos que ingresamos en nuestra web se cargan tanto en la misma pagina como en una tabla creada en la base de datos</p>
    </aside>


	<!-- <footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer> -->

</div>


</body>
</html>