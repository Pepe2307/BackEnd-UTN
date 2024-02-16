<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="estilos.css">
<style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
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
		<h2>Eventos</h2>

        <form action="unidad2/calculo_fecha.php" method="POST" class="form_unidad">

            <div class="form-example">
                <label for="dia">Día: </label>
                <input type="text" name="dia" id="dia" required maxlength="30"/>
            </div>

            <div class="form-example">
                <label for="mes">Mes: </label>
                <input type="text" name="mes" id="mes" required />
            </div>

            <div class="form-example">
                <label for="year">Año: </label>
                <input type="text" name="year" id="year" required />
            </div>

            <div class="form_submit">
                <input type="submit" value="Enviar!" />
            </div>

        </form>


        <?php
        if (isset($_GET['dias'])) { ?>

            <div class="mensaje">
                <?php
                    echo "<p>Entre el dia especificado y la fecha especificada hay un total de ".$_GET['dias'] . " dias de diferencia! </p>"
                ?>
            </div>
            
            <div>
                <?php /* include("./unidad2/calculo_fecha.php");  */?>
            </div>

        <?php } ?>

	</section>

	<aside>
    <p>Utilizando fechas, calculamos la diferencia entre el dia ingresado y la fecha actual</p>
    </aside>

	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>

</div>
</body>
</html>