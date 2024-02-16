<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilos.css">
    <!-- <style>
        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            cursor: pointer;
            margin: 10px;
            border: 2px solid #3498db;
            color: #3498db;
        }

        .button:hover {
            background-color: #3498db;
            color: #fff;
        }

        .button-secondary {
            border: 2px solid #2ecc71;
            color: #2ecc71;
        }

        .button-secondary:hover {
            background-color: #2ecc71;
            color: #fff;
        }
    </style> -->
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
		<h2>Agregar Productos Manualmente:</h2>
        

        <!-- <form action="./unidad7/altassql.php" method="POST">
            <label for="nombre">Nombre del producto</label>
            <input type="text" placeholder="Nombre" name="nombre" required/>

            <label for="descripcion">Descripcion del producto</label>
            <textarea rows="3" name="descripcion" required></textarea>

            <label for="precio">Precio del producto</label>
            <input type="text" placeholder="Precio" name="precio" required/>

            <input type="submit" value="Cargar Producto">
        </form> -->


        <form action="./unidad7/altassql.php" method="POST" class="form_unidad">
            <div class="form-example">
                <label for="nombre">Nombre del producto: </label>
                <input type="text" placeholder="Nombre" name="nombre" required/>
            </div>

            <div class="form-example">
                <label for="descripcion">Descripcion del producto: </label>
                <input type="text" placeholder="Descripcion" name="descripcion" required/>
                <!-- <textarea rows="3" name="descripcion" required></textarea> -->
            </div>

            <div class="form-example">
                <label for="precio">Precio del producto: </label>
                <input type="text" placeholder="Precio" name="precio" required/>
            </div>

            <div class="form_submit">
                <input type="submit" value="Cargar Producto">
            </div>
        </form>

        <?php
        if (isset($_GET['ok_carga'])) { ?>
            <div class="mensaje">
                <?php
                    echo "<p>Cargado!</p>"
                ?>
            </div>
        <?php } ?>

        <!-- <a href="#" class="button">Cargar Productos</a>
        <a href="#" class="button button-secondary">Ver Productos</a> -->


        <h2>Lista de Productos:</h2>
        <?php
        include('./unidad7/ver.php');
        ?>

        <h2>Compras:</h2>
        <?php
        include('./unidad7/ver_compras.php')
        ?>

	</section>




	<aside>
        <p>En este caso tenemos 2 tablas, una con los datos de los productos donde seleccionaremos a los mismos para agregarlos en nuestra segunda tabla de "carrito de compras" con sus correspondientes botones</p>
    </aside>
	<!-- <footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer> -->
</div>
</body>
</html>