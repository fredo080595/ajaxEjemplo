<?php 


class controladorEnviar{

	public function enviarDatos($datos){
		require_once "../modelo/modelo_enviar.php";

		$enviar = new modeloEnviar();
		$enviar->recibirDatos($datos);

		
	}

}

$datos = array();
$datos[0]=$_POST['nombre'];
$datos[1]=$_POST['ape'];
$datos[2]=$_POST['edad'];

$obj = new controladorEnviar();
echo $obj->enviarDatos($datos);