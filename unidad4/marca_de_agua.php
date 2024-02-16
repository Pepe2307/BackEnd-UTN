<?php
$marca = "./marca.png";
$imagen = "./logo.jpg";

$img = imagecreatefrompng($marca);
$ext = substr($imagen, -3);
$ext = strtolower($ext);

switch ($ext) {
    case 'gif':
        $img2 = imagecreatefromgif($imagen);
        break;

    case 'jpg':
        $img2 = imagecreatefromjpeg($imagen);
        break;

    case 'png':
        $img2 = imagecreatefrompng($imagen);
        break;
}

// Obtener dimensiones de la imagen original y la marca de agua
$marca_ancho = imagesx($img);
$marca_alto = imagesy($img);
$imagen_ancho = imagesx($img2);
$imagen_alto = imagesy($img2);

// Calcular nuevas dimensiones para la marca de agua
$nuevo_ancho_marca = $imagen_ancho / 2; // Ajusta según tus necesidades
$nuevo_alto_marca = $marca_alto * ($nuevo_ancho_marca / $marca_ancho);

// Calcular posición para centrar la marca de agua
$pos_x = ($imagen_ancho - $nuevo_ancho_marca) / 2;
$pos_y = ($imagen_alto - $nuevo_alto_marca) / 2;

// Crear una nueva imagen para la salida
$img_salida = imagecreatetruecolor($imagen_ancho, $imagen_alto);

// Copiar la imagen original
imagecopy($img_salida, $img2, 0, 0, 0, 0, $imagen_ancho, $imagen_alto);

// Redimensionar y copiar la marca de agua centrada
imagecopyresampled(
    $img_salida,
    $img,
    $pos_x, $pos_y, 0, 0,
    $nuevo_ancho_marca, $nuevo_alto_marca,
    $marca_ancho, $marca_alto
);

// Mostrar la imagen
header("Content-type: image/jpeg");
imagejpeg($img_salida);

// Liberar memoria
imagedestroy($img);
imagedestroy($img2);
imagedestroy($img_salida);
?>
