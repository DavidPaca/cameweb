<?php
class query extends conexion {
    private $pdo, $con, $sql;
    public function __construct() {
        $this->pdo = new conexion();
        $this->con = $this->pdo->conect();
    }
    public function select(string $sql)
    {
        $this->sql= $sql;
        $result = $this->con->prepare($this->sql);
        $result->execute();
        $data = $result->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
}

?>