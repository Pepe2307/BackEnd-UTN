<?php
class Productos {
    public $base;

    function __construct($baseconectada){
        $this->base = $baseconectada;
    }


    public function insertarProducto($prod, $desc, $pre){
        $SQL = $this->base->ejecutarSQL("INSERT INTO productos VALUES 
        (DEFAULT, '$prod', '$desc', '$pre')");
        return $SQL;
    }

    public function listarProductos(){
        $SQL = $this->base->ejecutarSQL("SELECT * FROM productos");
        return $SQL;
    }

    public function listarProductosCompras(){
        $SQL = $this->base->ejecutarSQL("SELECT * FROM compras");
        return $SQL;
    }

    public function modificarProd($preNew, $cod){
        $SQL = $this->base->ejecutarSQL("UPDATE productos SET precio=$preNew WHERE codigo=$cod");
        return $SQL;
    }

    public function eliminarProd($cod){
        $SQL = $this->base->ejecutarSQL("DELETE FROM productos WHERE codigo=$cod");
        return $SQL;
    }

    public function eliminarProdCompras($cod){
        $SQL = $this->base->ejecutarSQL("DELETE FROM compras WHERE codigo=$cod");
        return $SQL;
    }

    public function SeleccionarProducto_Compra($cod){
        $SQL = $this->base->ejecutarSQL("SELECT * FROM productos WHERE codigo=$cod");
        return $SQL;
    }


    /*  */ /*  */ /*  */ /*  */

    function seleccion_UnProducto($cod) {
		$SQL = $this->base->ejecutarSQL("SELECT * FROM productos WHERE codigo=$cod");
		return $SQL;
	}

    function insertarProductoCompras($cod, $prod, $desc, $pre) {
        $SQL = $this->base->ejecutarSQL("INSERT INTO compras VALUES (DEFAULT,'$cod','$prod','$desc','$pre')");
        return $SQL;
    }
}

?>