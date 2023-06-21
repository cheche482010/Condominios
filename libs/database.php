<?php 

class Database{

    private $host     ; 
    private $bd       ;
    private $user     ;
    private $password ;
    private $port     ;
    private $charset  ; 

    private $conexion;
    private $repetirconexion;
    private $errorconexion; 

    public function __construct(){
        $this->host = constant('HOST');
        $this->bd = constant('BD');
        $this->user = constant('USER');
        $this->password = constant('PASSWORD');
        $this->port = constant('PORT');
        $this->charset = constant('CHARSET');
    }

    function connect(){  
    
        
    }

    

    public function getRepetirConexion()
    {return $this->repetirconexion;}

    public function getErrorConexion()
    {return $this->errorconexion;}
}

?>