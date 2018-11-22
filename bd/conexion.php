<?php  


class conectar{

	private $server = "localhost";
	private $user = "root";
	private $pass = "";
	private $bd = "crud"; 

	public function conexion(){
		$conexion = mysqli_connect($this->server,$this->user,$this->pass,$this->bd);
		return $conexion;

	}
}
