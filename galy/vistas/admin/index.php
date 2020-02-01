<?php session_start();
require 'config.php';
require '../functions.php';

//include "db.php";
//$images = get_imgs();


$conexion = conexion($bd_config);

// Comprobamos si la session esta iniciada, sino, redirigimos.
comprobarSession();


if (!$conexion) {
	header("Location: ../error.php");
}

$posts = obtener_post($blog_config['post_por_pagina'], $conexion);

require '../modulos/admin-index.php';
?>