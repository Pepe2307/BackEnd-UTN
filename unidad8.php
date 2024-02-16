<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilos.css">
    <style>
    .boton {
        display: inline-block;
        padding: 10px 20px;
        background-color: blue;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    .boton:hover {
        background-color: skyblue;
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

		<h2>Registro de cuenta</h2>
		<form class="form_unidad" action="./unidad8/cargarusuario.php" method="POST">
            <div class="form-example">
                <label for="email">E-Mail: </label>
                <input type="email" name="email" maxlength="100" placeholder="Ingrese Email" required>

                <label for="pass">Contraseña: </label>
                <input type="password" name="pass" minlength="4" maxlength="10" placeholder="Ingrese Contraseña" required>

                <input id="button" type="submit" value="Registrarse">
            </div>
		</form>


        <h2>Ingreso de cuenta</h2>
		<form class="form_unidad" action="./unidad8/verificarusuario.php" method="POST">
            <div class="form-example">
                <label for="email">E-Mail: </label>
                <input type="email" name="email" maxlength="100" placeholder="Ingrese Email" required>

                <label for="pass">Contraseña: </label>
                <input type="password" name="pass" minlength="4" maxlength="10" placeholder="Ingrese Contraseña" required>

                <input id="button" type="submit" value="Ingresar">
            </div>
		</form>

		<?php
		if(isset($_GET['registro_exitoso'])) {
			echo "<p>Usuario De alta</p>";
		}

		if(isset($_GET['ingreso_exitoso'])) {
			echo "<p>Ingreso exitoso.</p>";
		}

		if(isset($_GET['error_contrasena'])) {
			echo "<p>Datos incorrectos.</p>";
		}
		?>


        <?php
        if(isset($_SESSION['email'])) {
            echo "<p>Buenas, " . $_SESSION['email'] . "</p>";
        ?>
        <p><a href="./unidad8/salir.php" class="boton">Salir de la sesión</a></p>
        <img src="./unidad4/logo.jpg" width="300px" length="300p`x">
        <?php } ?>
	</section>



	<aside>
        <p>Primero creamos una cuenta para poder ingresar con una SESION. Luego, con esa misma cuenta ingresamos los datos para poder iniciar sesion y ver contenido exlcusivo, tambien podemos cerrar sesion cuando queramos cambiar de cuenta</p>
    </aside>
</div>
</body>
</html>