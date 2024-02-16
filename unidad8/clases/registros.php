<?php
class Registros {

    public $base;


    function __construct($baseconectada) {
        $this->base = $baseconectada;
    }


    public function cargar_usuario($correo, $contrasena) {
        $SQL = $this->base->executeSQL("INSERT INTO registro(email, contrasena) VALUES ('$correo', '$contrasena')");
        return $SQL;
    }


    public function verificar_usuario($correo) {
        $SQL = $this->base->executeSQL("SELECT * FROM registro WHERE email = '$correo'");
        return $SQL;
    }
}
?>