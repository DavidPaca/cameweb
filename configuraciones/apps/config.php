<?php

class config{
    //private $vistasCont;
    // private $modelo;
    // public function __construct()
    // {
        
    //     $this->vistasCont = new vistasCont();
    //     $this->cargarModelo();
    // }

    // public function cargarModelo()
    // {
    //     $modelo = get_class($this)."Model";
    //     $rutaModelo = "modelos/".$modelo.".php";
    //     if(file_exists($rutaModelo)){
    //         require_once $rutaModelo;            
    //         $this->$modelo = new $modelo(); //es un nstancia
    //     }
    // }

   // private $vistasCont;
    protected $modelo;

    public function __construct() {
        $this->vistasCont = new vistasCont();
        $this->cargarModelo();
    }

    public function cargarModelo() {
        $modelo = get_class($this)."Model";
        $rutaModelo = "modelos/".$modelo.".php";
        if (file_exists($rutaModelo)) {
            require_once $rutaModelo;
            $this->modelo = new $modelo();
        }else {
                    echo "El modelo $modelo no fue encontrado.";
                }
    }

    // public function cargarModelo() {
    //     $modeloClass = get_class($this) . 'Model';
    //     $rutaModelo = "modelos/" . $modeloClass . ".php";

    //     if (file_exists($rutaModelo)) {
    //         require_once $rutaModelo;
    //         $this->modelo = new $modeloClass();
    //     } else {
    //         echo "El modelo $modeloClass no fue encontrado.";
    //     }
    // }
}
?>