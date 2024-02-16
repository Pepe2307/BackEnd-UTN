<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <section>

        <form action="modificar_prod.php" method="POST">
            <input type="hidden" name="codigo" value="<?php echo $_GET['cod'];?>">
            <input type="text" placeholder="Precio" name="precio">
            <input type="submit" value="Modificar Producto">
        </form>

    </section>
    
</body>
</html>