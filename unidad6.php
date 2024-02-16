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
		<h2>Usuarios</h2>
        <?php 
        include ("./unidad6/usuarios.php");
        ?>


        <form action="./unidad6.php" method="POST" class="form_unidad">
            <div class="form-example">
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="nombre" required maxlenght="30"/>
            </div>
            <div class="form-example">
                <label for="apellido">Apellido: </label>
                <input type="text" name="apellido" id="apellido" required maxlenght="30"/>
            </div>
            <div class="form-example">
                <label for="fecha">Fecha de nacimiento: </label>
                <input type="date" name="fecha" id="fecha" required />
            </div>
            <div class="form_submit">
                <input type="submit" value="Enviar!" />
            </div>
        </form>

        <?php
            if($_POST){
                $usuario_3 = New Usuarios ($_POST['nombre'], $_POST['apellido'], $_POST['fecha'],);
                $usuario_3->imprime_caracteristicas();
            }
        ?>
        <?php
        include("./unidad6/caract_usuarios.php");
        ?>

	</section>



	<aside>
        <p>Cargamos datos a una tabla y los mostramos en la web, junto con sus calculos de fechas</p>
    </aside>

</div>
</body>
</html>