<?php

class DolarClass
{

    private $id;
    private $precio;
    private $mensualidad;
    private $mes;
    private $anio;

    // GETTERS
    public function getId()
    {
        return $this->id;
    }
    public function getPrecio()
    {
        return $this->precio;
    }
    public function getMensualidad()
    {
        return $this->mensualidad;
    }
    
    public function getMes()
    {
        return $this->mes;
    }
    public function getAnio()
    {
        return $this->anio;
    }

    //SETTERS
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }
    public function setMensualidad($mensualidad)
    {
        $this->mensualidad = $mensualidad;
    }
    
    public function setMes($mes)
    {
        $this->mes = $mes;
    }
    public function setAnio($anio)
    {
        $this->anio = $anio;
    }

}
?>