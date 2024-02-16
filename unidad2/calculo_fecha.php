<?php
$day_var = $_POST['dia'];
$month_var = $_POST['mes'];
$year_var = $_POST['year'];

date_default_timezone_set('UTC');

$fechaEspecifica = new DateTime("$year_var-$month_var-$day_var");

$hoy = new DateTime();

$intervalo = $hoy->diff($fechaEspecifica);
$diasFaltantes = $intervalo->days;
?>

<div>
    <?php
    echo date("d/m/Y") . '<br>';
    echo $day_var . '<br>';
    echo $month_var . '<br>';
    echo $year_var . '<br>';

    echo "Fecha actual: " . $hoy->format("d/m/Y") . '<br>';
    echo "Fecha especificada: " . $fechaEspecifica->format("d/m/Y") . '<br>';
    echo "Días faltantes: " . $diasFaltantes . '<br>';

    header("Location: ../unidad2.php?dias=$diasFaltantes");
    ?>
</div>