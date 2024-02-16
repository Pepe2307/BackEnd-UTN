<?php
class BD {
    private $conection;
    public $error;
    function __construct($host, $user, $pass, $dbname)
    {
        $this->conection = new mysqli($host, $user, $pass, $dbname);
    }



    
    public function executeSQL($SQL) {
        $SQLejecutar = strtoupper(substr($SQL, 0, 6));

        switch ($SQLejecutar) {
            case 'INSERT':
            case 'UPDATE':
            case 'DELETE':
                $result = $this->conection->query($SQL);
                break;
            
            case 'SELECT':
                $result = $this->conection->query($SQL);
                while($listInfo = $result->fetch_assoc()) {
                    $showInfo[] =$listInfo; 
                }
                return $showInfo;
                break;
        }
    }
}
?>