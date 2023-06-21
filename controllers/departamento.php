<?php

class Departamento extends Controller
{ 
    public function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "";
    } 

    public function render()
    {
        $this->view->render('departamento/index');
    }

    // ------------------VISTAS----------------------
    public function registrar()
    {
        $this->view->render('departamento/registrar');
    }

    public function actualizar()
    {
        $this->view->render('departamento/actualizar');
    }

    
    public function consultar()
    {
        
        $this->view->render('departamento/consultar');
    }


}
?>