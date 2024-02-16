<?php
class Usuarios {
    private $nombre;
    private $apellido;
    private $fecha_nacimiento;
    private $edad;

    function __construct($nombre_const, $apellido_const, $fecha_nacimiento_const){
        $this->nombre = $nombre_const;
        $this->apellido = $apellido_const;

        $fecha_nacimiento = DateTime::createFromFormat('Y-m-d', $fecha_nacimiento_const);

        if ($fecha_nacimiento === false) {
            throw new Exception("Error al procesar la fecha de nacimiento. Formato incorrecto.");
        }

        $this->fecha_nacimiento = $fecha_nacimiento;

        $this->calcular_edad();

        echo "<p><strong> Producto Cargado </strong></p>";
    }

    function calcular_edad(){
        $hoy = new DateTime();
        $edad = $this->fecha_nacimiento->diff($hoy)->y;
        $this->edad = $edad;
    }

    function get_edad(){
        return $this->edad;
    }

    function imprime_caracteristicas(){
        echo "<p>Nombre: " . $this->nombre . " <br></p>";
        echo "<p>Apellido: " . $this->apellido . " <br></p>";
        
        if ($this->fecha_nacimiento instanceof DateTime) {
            echo "<p>Nacimiento: " . $this->fecha_nacimiento->format('Y-m-d') . " <br></p>";
            echo "<p>Edad: " . $this->get_edad() . " años <br></p>";
        } else {
            echo "<p>Fecha de nacimiento no válida.</p>";
        }
    }
}
?>
