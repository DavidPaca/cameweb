<?php
class usuarios extends config{
    public function index()
    {
        //if($this->modelo){
            print_r($this->modelo->getUsuario());
        //}else{
          //  echo "El modelo no está inicializado.";
       // }
    }
}


// class usuarios extends config {
//     private $modelo;

//     public function __construct() {
//         $this->modelo = new usuarioModel(); // Reemplaza 'Modelo' con el nombre de tu modelo
//     }

//     public function index() {
//         print_r($this->modelo->getUsuario());
//     }
// }
?>
