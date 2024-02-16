<?php

class Basesdedatos{
    private $conexion;

    function __construct($host, $user, $pass, $base){
        $this->conexion = new mysqli($host, $user, $pass, $base);
    }

    public function ejecutarSQL($codSQL){
        $instruccionSQL = strtoupper(substr($codSQL, 0, 6));

        switch ($instruccionSQL) {
            case 'INSERT':
            case 'UPDATE':
            case 'DELETE':
                $resultado = $this->conexion->query($codSQL);
                break;

            case 'SELECT':
                $resultado = $this->conexion->query($codSQL);
                while($listarInfo = $resultado->fetch_assoc()){
                    $mostrarInfo[] = $listarInfo;
                }
                return $mostrarInfo;
                break;
        }
    }


}

?>