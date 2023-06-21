<?php

class Dolar extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "";
    }

    public function render()
    {
        $this->view->render('dolar/index');
    }
    // ------------------VISTAS----------------------
    public function registrar()
    {
        $this->view->render('dolar/registrar');
    }

    public function convertir()
    {
        $this->view->render('dolar/convertir');
    }

    // ------------------ACCIONES----------------------

    // ===============================================================================
    // =============================CONSULTAR=========================================
    // ===============================================================================

    public function consultar()
    {

        $this->view->render('dolar/consultar');
    }

    
}
?>