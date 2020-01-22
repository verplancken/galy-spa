<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Salon Galy Spa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>css/bootstrap/fonts/glyphicons-halflings-regular.eot">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>css/fonts/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>css/fonts/ionicons/fonts/ionicons28b5.eot">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>css/fonts/ionicons/fonts/ionicons28b5.svg">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>css/fonts/ionicons/fonts/ionicons28b5.ttf">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>css/fonts/Montserrat/Montserrat-Bold.ttf">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>css/fonts/Lato/Lato-Light.ttf">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>css/fonts/Lato/Lato-Regular.ttf">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>css/fonts/local-font.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>css/fonts/Montserrat/Montserrat-Bold.ttf">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>css/fonts/Poppins/Poppins-Bold.ttf">



	<?php

		//echo '<link rel="icon" href="'.$servidor.$icono["icono"].'">';

		/*=============================================
		MANTENER LA RUTA FIJA DEL PROYECTO
		=============================================*/
		
		$url = Ruta::ctrRuta();
    	$urlServidor = Ruta::ctrRutaServidor();

	?>

	<!--=====================================
	PLUGINS DE CSS
	======================================-->

	<!-- Animate.css -->

	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>css/css/lemonspa.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>css/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>css/lightGallery/css/lightgallery.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>css/sweetalert/dist/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>css/sweetalert/dist/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>css/twentytwenty-master/twentytwenty.css">		

	<!--=====================================
	PLUGINS DE JAVASCRIPT
	======================================-->
	<!-- jQuery -->
	<script src="<?php echo $url; ?>vistas/js/jquery.min.js"></script>

	<script  src="<?php echo $url; ?>css/bootstrap/js/bootstrap.js"></script>
	<script  src="<?php echo $url; ?>css/jquery-countdown/jquery.countdown.min.js"></script>
	<script  src="<?php echo $url; ?>css/jquery-countdown/jquery.plugin.min.js"></script>
	<script  src="<?php echo $url; ?>css/js/froogaloop2.min.js"></script>
	<script  src="<?php echo $url; ?>css/js/jquery.counterup.min.js"></script>
	<script  src="<?php echo $url; ?>css/js/jquery.mousewheel.min.js">	</script>
	<script  src="<?php echo $url; ?>css/js/jquery.stellar.min.js"></script>
	<script  src="<?php echo $url; ?>css/js/jquery.waypoints.js"></script>
	<script  src="<?php echo $url; ?>css/js/lazysizes.min.js"></script>
	<script  src="<?php echo $url; ?>css/js/pp.js"></script>
	<script  src="<?php echo $url; ?>css/js/progressbar.min.js"></script>
	<script  src="<?php echo $url; ?>css/js/table-of-content.js"></script>
	<script  src="<?php echo $url; ?>css/js/theme-script.js"></script>
	<script  src="<?php echo $url; ?>css/js/tilt.jquery.min.js"></script>
	<script  src="<?php echo $url; ?>css/lightGallery/js/lg-autoplay.min.js"></script>
	<script  src="<?php echo $url; ?>css/lightGallery/js/lg-thumbnail.min.js"></script>
	<script  src="<?php echo $url; ?>css/lightGallery/js/lg-video.min.js"></script>
	<script  src="<?php echo $url; ?>css/lightGallery/js/lg-zoom.min.js"></script>
	<script  src="<?php echo $url; ?>css/sweetalert/dist/sweetalert.min.js"></script>		
	<script  src="<?php echo $url; ?>css/twentytwenty-master/jquery.event.move.js"></script>
	<script  src="<?php echo $url; ?>css/twentytwenty-master/jquery.twentytwenty.js"></script>

</head>



<?php

/*=============================================
CABEZOTE
=============================================*/

include "modulos/cabezote.php";

/*=============================================
CONTENIDO DINÁMICO
=============================================*/

$rutas = array();
$ruta = null;

if(isset($_GET["ruta"])){

	$rutas = explode("/", $_GET["ruta"]);

	$item = "ruta";
	$valor =  $rutas[0];

	/*=============================================
	LISTA BLANCA DE URL'S AMIGABLES
	=============================================*/

	if($rutas[0] == "index" || $rutas[0] == "trabajos" || $rutas[0] == "nosotros" || $rutas[0] == "contacto" || $rutas[0] == "servicios" || $rutas[0] == "blog"){

		include "modulos/".$rutas[0].".php";

	}else{

		include "modulos/error404.php";

	}

}else{
	include "modulos/inicio.php";

}

?>

<!--=====================================
BOTON FLOTANTE
======================================-->

<script type="text/javascript" style="">
    (function () {
        var options = {
            facebook: "107694017316744", // Facebook page ID
            whatsapp: "+52 1 55 10 06 54 21", // WhatsApp number
            email: "adiazm@eago.com.mx", // Email
            sms: "5510065421", // Sms phone number
            call: "5510065421", // Call phone number
            company_logo_url: "http://localhost/eago-pag/images/logo-light.png", // URL of company logo (png, jpg, gif)
            greeting_message: "", // Text of greeting message
            call_to_action: "Cotiza ahora", // Call to action
            wa_vb_message: "", // Message for WhatsApp
            button_color: "#00B0B6", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp,email,sms,call" // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>

 <!--=================================
 back to top -->

<input type="hidden" value="<?php echo $url; ?>" id="rutaOculta">
<!--=====================================
JAVASCRIPT PERSONALIZADO
======================================-->

<!--=====================================
https://developers.facebook.com/
======================================-->



</body>
</html>