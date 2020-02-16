<?php 
    include("slide.php");
 ?>
    <!-- About Us Area Start -->
    <section class="roberto-about-area section-padding-100-0" style="background-image: url('<?php echo $url; ?>vistas/img/pag1/bg-4.jpg');">


        <div class="container mt-100">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                        <h6>Nosotros</h6>
                        <h2>Bienvenido a<br>Salon Galy Spa</h2>
                    </div>
                    <div class="about-us-content mb-100">
                    <h5 class="wow fadeInUp" data-wow-delay="300ms">
                        <strong></strong>
Somos un Salón-Spa dedicado a mejorar y mantener la belleza del rostro, cabello y cuerpo buscando la unificación del concepto belleza-salud, mediante productos de alta calidad en combinación con aparatología de última generación y lo último en técnicas manuales lo que hacen de GALY SPA un espacio único de bienestar, donde la imagen toma punto clave para lograr el éxito tanto personal como profesional, ya que una buena imagen detona belleza, armonía y Salud. <br>
Contamos con personal altamente capacitado para cubrir cada una de las necesidades de nuestros clientes, sustentados en valores como: Ética, honestidad, respeto y servicio, lo que hacen de GALY SPA un centro único donde la estética integral es nuestro mayor compromiso

                    </h5>
                        <!--<p class="wow fadeInUp" data-wow-delay="400ms">Manager: <span>Michen Taylor</span></p>-->
                        <!--<img src="</?php echo $url; ?>vistas/img/core-img/signature.png" alt="" class="wow fadeInUp" data-wow-delay="500ms">-->
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about-us-thumbnail mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="row no-gutters">
                            <div class="col-6">
                                <div class="single-thumb">
                                    <img src="<?php echo $url; ?>vistas/img/HD/facial2.jpg" alt="">
                                </div>
                                <div class="single-thumb">
                                    <img src="<?php echo $url; ?>vistas/img/HD/O6RXL30.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="single-thumb">
                                    <img src="<?php echo $url; ?>vistas/img/HD/tratamiento-facial.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Service Area Start -->
    <div class="roberto-service-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="service-content d-flex align-items-center justify-content-between">
                        <!-- Single Service Area -->
                        
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="100ms" >
                            <a href="Tratamientos-Faciales" title="">
                            <img src="<?php echo $url; ?>vistas/img/pag1/icon-3.png" alt="">
                            <h5>Faciales</h5>
                            </a>
                        </div>

                        <!-- Single Service Area -->
                        
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <a href="Masajes" title="">
                            <img src="<?php echo $url; ?>vistas/img/pag1/icon-2.png" alt=""  >
                            <h5>Masajes</h5>
                            </a>
                        </div>

                        <!-- Single Service Area -->
                       
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="500ms">
                             <a href="Salon-belleza" title="">
                            <img src="<?php echo $url; ?>vistas/img/pag1/icon-1.png" alt=""  >
                            <h5>Salon </h5>
                            </a>
                        </div>

                        <!-- Single Service Area -->
                       
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="700ms">
                             <a href="Tratamientos-Corporales" title="">
                            <img src="<?php echo $url; ?>vistas/img/pag1/icon-2.png" alt=""  >
                            <h5>Tratamientos </h5>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">COTIZA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="CERRAR">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <div class="container">
        <h2>Datos de contacto</h2>
            <form name="frmContacto" method="post">
            <fieldset class="form-group">

                <div class="form-group">
                    <label for="zipCode">C.P.</label>
                    <input type="number" maxlength="5" id="zipCode" name="zipCode" class="form-control" placeholder="Tu Código  postal">
                   
                </div>

                <div class="form-group">
                    <label for="locationTxt">Colonia o Delegación</label>
                    <input class="form-control" type="text" id="locationTxt" name="locationTxt" placeholder="Ingresa tu Colonia o Delegación">
                </div>

                <div class="form-group row">
                    <div class="form-group col">
                        <label for="first_name">Nombre:</label>
                        <input class="form-control" type="text" id="firstName" name="first_name" placeholder="Ingresa tu nombre" >
                    </div>

                    <div class="form-group col">
                        <label for="last_name">Apellido</label>
                        <input class="form-control" type="text" id="last_name" name="last_name" placeholder="Ingresa tu apellido" >
                    </div>
                </div>

                <div class="form-group row">
                    <div class="form-group col">
                        <label for="email">E-mail</label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="Ingrese su email" value=" ">
                     
                    </div>

                    <div class="form-group col">
                        <label for="telephone">Celular</label>
                        <input class="form-control" type="text" id="telephone" name="telephone" placeholder="Ingrese su numero de celular">
                       
                    </div>
                </div>

                
<button type="submit" value="Enviar" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  enviar
</button>

</form>



<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "samm.arquitectura@hotmail.com";
$email_subject = "Contacto desde el sitio web";


// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['first_name']) ||
!isset($_POST['last_name']) ||
!isset($_POST['email']) ||
!isset($_POST['telephone']) ||
!isset($_POST['locationTxt']) ||
!isset($_POST['zipCode'])) {


echo "<script language='javascript'>";
echo "alert('Ocurrió un error y el formulario no ha sido enviado')";
echo "</script>"; 

die();
}

$email_message = "Detalles del formulario de contacto:\n\n";

$email_message .= "Nombre: " . $_POST['first_name'] . "\n";
$email_message .= "Apellido: " . $_POST['last_name'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Teléfono: " . $_POST['telephone'] . "\n";
$email_message .= "Alcadia: " . $_POST['locationTxt'] . "\n";
$email_message .= "CP: " . $_POST['zipCode'] . "\n\n";

// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);


echo "<script language='javascript'>";
echo "alert('El correo se ha enviado exitosamente')";
echo "</script>"; 


}
?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
      </div>
    </div>
  </div>
</div>
    <!-- Service Area End -->
    </section>
    <!-- About Us Area End -->

    <!-- Projects Area Start -->
    <section class="roberto-project-area">
        <!-- Projects Slide -->
        <div class="projects-slides owl-carousel">
            <!-- Single Project Slide -->
            <div class="single-project-slide active bg-img" style="background-image: url('<?php echo $url; ?>vistas/img/HD/facial2.jpg');">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                        <h6></h6>
                        <h5>Tratamientos Faciales</h5>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                        <h6></h6>
                        <h5>Tratamientos Faciales</h5>
                        <p>Leer más</p>
                    </div>
                    <a href="Tratamientos-Faciales" class="btn project-btn">Ver más<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Project Slide -->
            <div class="single-project-slide bg-img" style="background-image: url('<?php echo $url; ?>vistas/img/HD/O6RXL30.jpg');">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                        <h6></h6>
                        <h5>Masajes</h5>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                        <h6></h6>
                        <h5>Masajes</h5>
                        <p>Contactar</p>
                    </div>
                    <a href="Masajes" class="btn project-btn">Ver más<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Project Slide -->
            <div class="single-project-slide bg-img" style="background-image: url('<?php echo $url; ?>vistas/img/HD/salon5.jpg');">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                        <h6></h6>
                        <h5>Salon de Belleza</h5>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                        <h6></h6>
                        <h5>Salon de Belleza</h5>
                        <p>Agenda tu cita</p>
                    </div>
                    <a href="Salon-belleza" class="btn project-btn">Ver más<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Project Slide -->
            <div class="single-project-slide bg-img" style="background-image: url('<?php echo $url; ?>vistas/img/HD/tc.jpg');">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                        <h6></h6>
                        <h5>Tratamientos Corporales</h5>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                        <h6></h6>
                        <h5>Tratamientos Corporales</h5>
                        <p>Leer más</p>
                    </div>
                    <a href="Tratamientos-Corporales" class="btn project-btn">Ver más<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Project Slide -->
            <div class="single-project-slide bg-img" style="background-image: url('<?php echo $url; ?>vistas/img/HD/mani2.jpg');">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                        <h6></h6>
                        <h5>Manicura y Pedicura</h5>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                        <h6></h6>
                        <h5>Manicura y Pedicura</h5>
                        <p>Contactar</p>
                    </div>
                    <a href="Manicura-Pedicura" class="btn project-btn">Ver más<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>

    </section>
    <!-- Projects Area End -->
<?php 

        
        $conexion = conexion($bd_config);
        // Obtenemos los post
        $posts = obtener_post($blog_config['post_por_pagina'], $conexion);
        $posts2 = obtener_post($blog_config2['post_por_pagina2'], $conexion);


 ?>
    <!-- Blog Area Start -->
    <section class="roberto-blog-area section-padding-100-0" id="blog" style="background-image: url('<?php echo $url;?>vistas/img/HD/bg-services.jpg');">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h6>Blog</h6>
                        <h2>Noticias y Tips</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Post Area -->
                <?php foreach($posts as $post): ?>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                      
                        <a class="post-thumbnail" href="<?php echo $urlServidor; ?>single.php?id=<?php echo $post['id']; ?>">

                            <img src="<?php echo $url; ?>vistas/img/core-img/logo-galy.png" alt=""  style="position: absolute;top:0%;width: 15%;opacity: 0.5">
                            <img src="<?php echo $urlServidor; ?>imagenes/<?php echo $post['thumb']; ?>" alt="<?php echo $post['titulo'] ?>">

                        </a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a href="#" class="post-date"><?php echo fecha($post['fecha']); ?></a>
                            <a href="#" class="post-catagory"></a>
                        </div>
                        <!-- Post Title -->
                        <a class="post-title" href="single.php?id=<?php echo $post['id']; ?>"><strong><?php echo $post['titulo'] ?></strong></a>
                        <p class="extracto"><strong><?php echo $post['extracto'] ?></strong>
                             <div class="fb-share-button" data-href="<?php echo $urlServidor; ?>single.php?id=<?php echo $post['id']; ?>" data-layout="button" data-size="large"></div>
                        </p>
                        <a href="<?php echo $urlServidor; ?>single.php?id=<?php echo $post['id']; ?>" class="btn continue-btn">
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                       
                    </div>
                </div>
                <?php endforeach; ?>          

            </div>
            <!-- Paginacion -->
            <section class="paginacion">
                <ul>
                    <?php 
                        # Establecemos el numero de paginas
                        $numero_paginas = numero_paginas($blog_config['post_por_pagina'], $conexion);
                    ?>
                    <!-- Mostramos el boton para retroceder una pagina -->
                    <?php if (pagina_actual() === 1): ?>
                        <li class="disabled">&laquo;</li>
                    <?php else: ?>
                        <li><a href="index.php?p=<?php echo pagina_actual() - 1?>#blog">&laquo;</a></li>
                    <?php endif; ?>

                    <!-- Creamos un elemento li por cada pagina que tengamos -->
                    <?php for ($i = 1; $i <= $numero_paginas; $i++): ?>
                        <!-- Agregamos la clase active en la pagina actual -->
                        <?php if (pagina_actual() === $i): ?>
                            <li class="active">
                                <?php echo $i; ?>
                            </li>
                        <?php else: ?>
                            <li>
                                <a href="index.php?p=<?php echo $i?>#blog"><?php echo $i; ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endfor; ?>

                    <!-- Mostramos el boton para avanzar una pagina -->
                    <?php if (pagina_actual() == $numero_paginas): ?>
                        <li class="disabled">&raquo;</li>
                    <?php else: ?>
                        <li><a href="index.php?p=<?php echo pagina_actual() + 1; ?>#blog">&raquo;</a></li>
                    <?php endif; ?>
                </ul>
            </section>
            <!-- Paginacion -->
        </div>
    </section>


    <!-- Blog Area End -->

    <!-- Call To Action Area Start -->
<!--    <section class="roberto-cta-area">
        <div class="container">
            <div class="cta-content bg-img bg-overlay jarallax" style="background-image: url(<?php echo $url; ?>vistas/img/bg-img/1.jpg);">
                <div class="row align-items-center">
                    <div class="col-12 col-md-7">
                        <div class="cta-text mb-50">
                            <h2>Contact us now!</h2>
                            <h6>Contact (+12) 345-678-9999 to book directly or for advice</h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 text-right">
                        <a href="#" class="btn roberto-btn mb-50">Contact Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section-->
    <!-- Call To Action Area End -->

    <!-- Partner Area Start -->
<!--    <div class="partner-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partner-logo-content d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                        <!~~ Single Partner Logo ~~>
                        <a href="#" class="partner-logo"><img src="<?php echo $url; ?>vistas/img/core-img/p1.png" alt=""></a>
                        <!~~ Single Partner Logo ~~>
                        <a href="#" class="partner-logo"><img src="<?php echo $url; ?>vistas/img/core-img/p2.png" alt=""></a>
                        <!~~ Single Partner Logo ~~>
                        <a href="#" class="partner-logo"><img src="<?php echo $url; ?>vistas/img/core-img/p3.png" alt=""></a>
                        <!~~ Single Partner Logo ~~>
                        <a href="#" class="partner-logo"><img src="<?php echo $url; ?>vistas/img/core-img/p4.png" alt=""></a>
                        <!~~ Single Partner Logo ~~>
                        <a href="#" class="partner-logo"><img src="<?php echo $url; ?>vistas/img/core-img/p5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Partner Area End -->

