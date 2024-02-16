<?php session_start(); ?>
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
		<h2>Consultas</h2>

        <?php
        function contenido_captcha(){
            $pattern = "123456789qwertyuiopasdfghjklñzxcvbnm#?";
            $clave = '';
            for ($i=0; $i<5; $i++){
                $clave .= $pattern[rand(0,36)];
            }
            return $clave;
        }
        $_SESSION['captcha'] = contenido_captcha();
        ?>

        <form action="unidad5/cargar.php" method="POST" class="form_unidad">
            <div class="form-example">
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="nombre" required maxlength="30"/>
            </div>

            <div class="form-example">
                <label for="apellido">Apellido: </label>
                <input type="text" name="apellido" id="apellido" required maxlength="30"/>
            </div>

            <div class="form-example">
                <label for="mail">Mail: </label>
                <input type="mail" name="mail" id="mail" required />
            </div>

            <div class="form-example">
                <label for="consulta">Consulta: </label>
                <input type="text" name="consulta" id="consulta" required />
            </div>

            <h4>CAPTCHA</h4>
            <img style="margin-bottom: 20px" src="./unidad5/imagen_captcha.php">
            <div class="form-example">
                <input type="text" name="captcha_text" id="captcha_text" required maxlength="30"/>
            </div>

            <div class="form_submit">
                <input type="submit" value="Enviar Datos (Verificar captcha primero)!" />
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
        if (isset($_GET['captcha_error'])) { ?>

            <div class="mensaje_error">
                <?php
                    echo "<p>ERROR!!</p>"
                ?>
            </div>
        <?php } ?>


	</section>






	<aside>
        <p>Cargamos los datos ingresados a una tabla de MySql SOLAMENTE si el capcha creado con PHP es correcto</p>
    </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>

</div>
</body>
</html>