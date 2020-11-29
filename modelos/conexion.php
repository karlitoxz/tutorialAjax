<?php 

class Conexion{

	static public function conectar(){

		#PDO("nombre del servidor; nombre de la base de datos", "usuario", "contraseña")

		$link = new PDO("mysql:host=localhost;dbname=curso-php", 
			            "root", 
			            "");

		$link->exec("set names utf8");

		return $link;

	}

}

/*$con = Conexion::conectar();
$stmt = Conexion::conectar()->prepare("select * from registros");
$stmt->execute();
$datos = $stmt -> fetchAll();
var_dump($datos);*/
