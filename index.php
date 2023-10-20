<?php

    //   if(!empty( $_GET["url"])){
    //     $ruta =  $_GET["url"];
        
    //   }else{
    //     echo "home/index";
    //   }
    require_once "configuraciones/configuraciones.php";
    $ruta = !empty( $_GET["url"]) ? $_GET["url"] : "home/index";
    $array = explode("/",$ruta);
    $controlador = $array[0];
    $metodo = "index";
    $parametro = "";

    if(!empty($array[1])){
        if(!empty($array[1] != "")){
            $metodo = $array[1];
        }
    }

    if(!empty($array[2])){
        if(!empty($array[2] != "")){
            for($i=2; $i < count($array); $i++){
                $parametro .= $array[$i].",";
            }
            $parametro = trim($parametro,",");
        }
    }

    require_once "configuraciones/apps/cargaControlador.php";

    $dirControladores = "controladores/".$controlador.".php";
    if(file_exists($dirControladores)){
        require_once $dirControladores;
        $controlador = new $controlador();
        if(method_exists($controlador, $metodo)){
            $controlador->$metodo($parametro);
        }else{
            echo "NO hay existe MÉTODO";
        }
    }else{
        echo "NO existe CONTROLADOR";
    }

?>