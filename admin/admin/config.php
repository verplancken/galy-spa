<?php

define('RUTA', 'http://localhost/galy-spa/admin/');
//define('RUTA', 'https://eago.com.mx/blog/');

//DB TRABJANDO EN LOCALHOST
$bd_config = array(
	'basedatos' => 'salongalyspa',
	'usuario' => 'root',
	'pass' => ''
);

//DB TRABJANDO EN EL SERVIDOR
//
//$bd_config = array(
	//'basedatos' => 'blog-eago',
	//'usuario' => 'user-blog',
	//'pass' => 'Blog123.'
//);

$blog_config = array(
	'post_por_pagina'=> '6',
	'carpeta_imagenes' => 'imagenes/'
);

$blog_admin = array(
	'usuario' => 'Galyspa',
	'password' => 'Codage2020'
);

?>
