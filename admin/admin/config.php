<?php
define('front', 'http://localhost/galy-spa/galy/');
define('ver', 'http://localhost/galy-spa/admin/');
define('RUTA', 'http://localhost/galy-spa/admin/');

define('estilos', 'http://localhost/galy-spa/galy/vistas/');
define('link', 'http://localhost/galy-spa/galy/');

//DB TRABJANDO EN LOCALHOST
$bd_config = array(
	'basedatos' => 'salongalyspa',
	'usuario' => 'root',
	'pass' => ''
);

//DB TRABJANDO EN EL SERVIDOR
//
//$bd_config = array(
	//'basedatos' => 'salongalyspa',
	//'usuario' => 'Galyspa',
	//'pass' => 'Codage2020.'
//);

$blog_config = array(
	'post_por_pagina'=> '3',
	'carpeta_imagenes' => 'imagenes/'
);

$blog_config2 = array(
	'post_por_pagina2'=> '12',
);


$blog_admin = array(
	'usuario' => 'Galyspa',
	'password' => 'Codage2020'
);
////Conexionn blog con el Admin

$DB_HOST="localhost";//Servidor donde se encuentra alojada nuestra base de datos
$DB_NAME= "salongalyspa";// Nombre de la base de datos
$DB_USER= "root";//Usuario de la base de datos
$DB_PASS= "";//Contraseña del usuario de la base de datos
	# conectare la base de datos
    $con=@mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
    //Conexion Db slide frontend
    

$Localhost = 'localhost';
$Usuario_BD = 'root';
$Password_BD = '';
$Nombre_BD = 'salongalyspa';

try{
  $DB_con = new PDO("mysql:host={$Localhost};dbname={$Nombre_BD};charset=UTF8",$Usuario_BD,$Password_BD);
  $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
  echo $e->getMessage();
}
?>

