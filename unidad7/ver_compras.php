<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        .admin-buttons {
            justify-content: space-between;
        }

        .admin-buttons a {
            background-color: #acf;
            padding: 5px 10px;
            font-size: 14px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .admin-buttons a:hover {
            background-color: #2ecc71;
            color: #fff;
        }
    </style>
    <title>Tabla con Estilos</title>
</head>

<body>

    <table>

        <thead>
            <tr>
                <th>Código</th>
                <th>Producto</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Eliminar</th>
            </tr>
        </thead>

        <tbody>
            <?php
            /* include('recursos.php'); */
            $mostrarProd = $productos->listarProductosCompras();
            for ($i=0; $i<count($mostrarProd); $i++){ ?>
                <tr>
                    <td>
                        <?php echo $mostrarProd[$i]['codigo']; ?>
                    </td>
                    <td>
                        <?php echo $mostrarProd[$i]['producto']; ?>
                    </td>
                    <td>
                        <?php echo $mostrarProd[$i]['descripcion']; ?>
                    </td>
                    <td>
                        <?php echo $mostrarProd[$i]['precio']; ?>
                    </td>

                    <td class="admin-buttons">
                        <a href="./unidad7/eliminarCompras.php?cod=<?php echo $mostrarProd[$i]['codigo']; ?>">
                        Eliminar</a>
                    </td>

                    </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>
</body>
</html>
