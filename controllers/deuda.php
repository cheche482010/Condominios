<?php

class Deuda extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "";
    }

    public function render()
    {

        

        $this->view->render('deuda/consultar');
    }

 
    public function consultar()
    {

     
        $this->view->render('deuda/consultar');
    }

    public function mensualidad()
    {

      
        $this->view->render('deuda/mensualidad');
    }

    
    public function asignar()
    {


        $this->view->render('deuda/asignar');
    }

    public function pagar()
    {

       

        $this->view->render('deuda/pagar');
    }

    public function X()
    {
       
        $this->view->render('deuda/pagar2');
    }

    
}
?>