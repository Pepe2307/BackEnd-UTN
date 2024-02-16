<style>
        .comentario {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
        .comentario p {
            margin: 5px 0;
        }
    </style>

<?php 

$archivo = fopen('comentarios.txt', 'a');

date_default_timezone_set('UTC');

$nombre= $_POST['nombre'];
$mail= $_POST['mail'];
$comentario= $_POST['comentario'];
$hoy = new DateTime();

$contenido =
    '<div class="comentario">
        <p>
            <strong>Nombre de usuario:</strong> ' . $nombre . '
            <strong>Mail del usuario:</strong> ' . $mail .  '
            <strong>Comentario enviado:</strong> ' . $comentario .  '
            <strong>Fecha y hora:</strong> ' . $hoy->format('Y-m-d H:i') .
        '</p>
    </div>' . "\n";


fwrite($archivo, $contenido);

fclose($archivo);

header("Location: ../unidad3.php?cargado");


?>