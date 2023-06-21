<?php

class DepartamentoClass
{

    private $id;
    private $nombre;
    private $ubicacion;
    private $capacidad;
    private $mes;
    private $descripcion;
    private $estado;

   
    // GETTERS
    public function getId()
    {
        return $this->id;
    }
    function getNombre()
    {
        return $this->nombre;
    }
    function getUbicacion()
    {
        return $this->ubicacion;
    }
    function getCapacidad()
    {
        return $this->capacidad;
    }
    function getMes()
    {
        return $this->mes;
    }
    function getDescripcion()
    {
        return $this->descripcion;
    }
    function getEstado()
    {
        return $this->estado;
    }

    //SETTERS
    function setId($id)
    {
        $this->id = $id;
    }
    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;
    }
    function setCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;
    }
    function setMes($mes)
    {
        $this->mes = $mes;
    }
    function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
    function setEstado($estado)
    {
        $this->estado = $estado;
    }

}
?>