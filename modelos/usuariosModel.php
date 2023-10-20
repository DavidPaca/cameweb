<?php
class usuariosModel extends query{
    public function __construct()
    {
       parent::__construct();
    }
    public function getUsuario()
    {
        $sql = "SELECT * FROM tbl_usuarios_sistema";
        $data = $this->select($sql);
        return $data;
    }
}
?>