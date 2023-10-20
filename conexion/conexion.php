<?php
/*=============================================
=         CONEXIÓN A LA BASE DE DATOS =
=============================================*/
class conexion{
	
	// public function cConexion(){

	// 	try{

	// 		error_reporting(0);

	// 		$hostname= "localhost";
	// 		$username= "root";
	// 		$password= "";
	// 		$database= "tareas_dirigidas";

	// 	    $conexion = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
	// 	    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// 	    return $conexion;
		    
	// 	}catch(PDOException $e){
	// 	    echo "ERROR: " . $e->getMessage();
	// 	}

	// }

	private $conect;
	public function __construct()
	{
		$pdo = "mysql:host=".host.";dbname=".db.";.charset.";
		try {
			$this->conect = new PDO($pdo, user, pass);
			$this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo "ERROR en la conexion".$e->getMessage();
		}
	}

	public function conect()
	{
		return $this->conect;
	}

}

?>