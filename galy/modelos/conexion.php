<?php

class Conexion{

	public function conectar(){
		$server = "";
		$usuario = "";
		$clave = "";
		$db = "";

		$conesxiondb = mysql_connect($server, $usuario, $clave, $db) or die("Error al Conectar la DB");
		if ($conesxiondb) {
			echo "Conexion Exitosa";
		}
	}
}

