<?php
spl_autoload_register(function($class){
    if(file_exists("configuraciones/apps/".$class.".php")){
        require_once "configuraciones/apps/".$class.".php";
    }
}) 
?>