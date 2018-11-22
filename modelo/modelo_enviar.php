<?php  
require_once "../bd/conexion.php";

class modeloEnviar{

	private function conexion(){
		$c = new conectar();
		return $c->conexion();

	}


	public function recibirDatos($datos){

		$conexion = self::conexion();
		$sql = "INSERT INTO persona(nombre,apellido,edad) values ('$datos[0]','$datos[1]','$datos[2]')";
		return = mysqli_query($conexion,$sql);
		 

	}


}