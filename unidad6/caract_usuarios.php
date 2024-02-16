<?php

try {
    /* Instanciar la clase Usuarios */
    $usuario_1 = New Usuarios ('Pablo', 'Paez', '1999-07-23');
    $usuario_1->imprime_caracteristicas();

    $usuario_2 = New Usuarios ('Peperino', 'Paez', '1900-07-23');
    $usuario_2->imprime_caracteristicas();


} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
