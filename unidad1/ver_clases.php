<?php include("componentes/conexion.php"); 


$consultar_clases=mysqli_query($conexion, "SELECT * FROM clases");
?>

<div class="database">

    <?php while($array_clases=mysqli_fetch_assoc($consultar_clases)){ ?>

            <div class="data_container">
                <h3>Numero de ID: <?= $array_clases['id_clase']?> </h3>
                <p>Unidad: <?= $array_clases['unidad']?></p>
                <p>Fecha: <?= $array_clases['fecha']?></p>
                <p><a href="componentes/borrar_dato.php?borrar_dato=<?= $array_clases['id_clase'] ?>"> Borrar Dato!</a></p>
                <!-- ojo al "../" que a veces funciona si se lo sacas, aunque si no lo usas no autocompleta -->
            </div>

    <?php } ?>
</div>