<?php

class vistasCont
{
    public function getView($controladors, $vistas)
    {
        $controladors = get_class($controladors);
        if($controladors == "home"){
            $vistas = "vistas/".$vistas.".php";
        }else{
            $vistas = "vistas/".$controladors."/".$vistas.".php";
        }
        require $vistas;
    }
}
