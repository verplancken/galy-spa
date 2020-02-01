
    <!-- Welcome Area Start -->
<!--    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!~~ Single Welcome Slide ~~>
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(<?php echo $url; ?>vistas/img/HD/facial.jpg);" data-img-url="<?php echo $url; ?>vistas/img/HD/facial.jpg">
                <!~~ Welcome Content ~~>
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!~~ Welcome Text ~~>
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInLeft" data-delay="200ms"></h6>
                                    <h2 data-animation="fadeInLeft" data-delay="500ms">Tratamientos Faciales</h2>
                                    <a href="Tratamientos-Faciales" class="btn roberto-btn btn-2" data-animation="fadeInLeft" data-delay="800ms">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!~~ Single Welcome Slide ~~>
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(<?php echo $url; ?>vistas/img/HD/masaje1.jpg);" data-img-url="<?php echo $url; ?>vistas/img/HD/masaje1.jpg">
                <!~~ Welcome Content ~~>
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!~~ Welcome Text ~~>
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInUp" data-delay="200ms"></h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms">Masajes</h2>
                                    <a href="Masajes" class="btn roberto-btn btn-2" data-animation="fadeInUp" data-delay="800ms">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!~~ Single Welcome Slide ~~>
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(<?php echo $url; ?>vistas/img/HD/masaje2.jpg);" data-img-url="<?php echo $url; ?>vistas/img/HD/masaje2.jpg">
                <!~~ Welcome Content ~~>
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!~~ Welcome Text ~~>
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInDown" data-delay="200ms"></h6>
                                    <h2 data-animation="fadeInDown" data-delay="500ms">Tratamientos Corporales</h2>
                                    <a href="Tratamientos-Corporales" class="btn roberto-btn btn-2" data-animation="fadeInDown" data-delay="800ms">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(<?php echo $url; ?>vistas/img/HD/mujer-salon.jpg);" data-img-url="<?php echo $url; ?>vistas/img/HD/mujer-salon.jpg">
                <!~~ Welcome Content ~~>
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!~~ Welcome Text ~~>
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInDown" data-delay="200ms"></h6>
                                    <h2 data-animation="fadeInDown" data-delay="500ms">Salon de Belleza</h2>
                                    <a href="Salon-belleza" class="btn roberto-btn btn-2" data-animation="fadeInDown" data-delay="800ms">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </section>-->
    <!-- Welcome Area End -->

    <!-- About Us Area Start -->
    <section class="roberto-about-area section-padding-100-0" style="background-image: url('<?php echo $url; ?>vistas/img/pag1/bg-4.jpg');">
        <!-- Hotel Search Form Area -->
<!--        <div class="hotel-search-form-area">
            <div class="container-fluid">
                <div class="hotel-search-form">
                    <form action="#" method="post">
                        <div class="row justify-content-between align-items-end">
                            <div class="col-6 col-md-2 col-lg-3">
                                <label for="checkIn">Check In</label>
                                <input type="date" class="form-control" id="checkIn" name="checkin-date">
                            </div>
                            <div class="col-6 col-md-2 col-lg-3">
                                <label for="checkOut">Check Out</label>
                                <input type="date" class="form-control" id="checkOut" name="checkout-date">
                            </div>
                            <div class="col-4 col-md-1">
                                <label for="room">Room</label>
                                <select name="room" id="room" class="form-control">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                </select>
                            </div>
                            <div class="col-4 col-md-1">
                                <label for="adults">Adult</label>
                                <select name="adults" id="adults" class="form-control">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                </select>
                            </div>
                            <div class="col-4 col-md-2 col-lg-1">
                                <label for="children">Children</label>
                                <select name="children" id="children" class="form-control">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-3">
                                <button type="submit" class="form-control btn roberto-btn w-100">Check Availability</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>-->

        <div class="container mt-100">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                        <h6>Nosotros</h6>
                        <h2>Bienvenido al<br>Salon Galy Spa</h2>
                    </div>
                    <div class="about-us-content mb-100">
                        <h5 class="wow fadeInUp" data-wow-delay="300ms"
                        >Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. <br>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
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
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="100ms">
                            <img src="<?php echo $url; ?>vistas/img/pag1/icon-3.png" alt="">
                            <h5>Tratamientos Faciales</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <img src="<?php echo $url; ?>vistas/img/pag1/icon-2.png" alt="">
                            <h5>Masajes</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="500ms">
                            <img src="<?php echo $url; ?>vistas/img/pag1/icon-1.png" alt="">
                            <h5>Salon de Belleza</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="700ms">
                            <img src="<?php echo $url; ?>vistas/img/pag1/icon-2.png" alt="">
                            <h5>Tratamientos Corporales</h5>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Area End -->
    </section>
    <!-- About Us Area End -->

    <!-- Testimonials Area Start -->
<!--    <section class="roberto-testimonials-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="testimonial-thumbnail owl-carousel mb-100">
                        <img src="<?php echo $url; ?>vistas/img/bg-img/10.jpg" alt="">
                        <img src="<?php echo $url; ?>vistas/img/bg-img/11.jpg" alt="">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <!~~ Section Heading ~~>
                    <div class="section-heading">
                        <h6>Testimonials</h6>
                        <h2>Our Guests Love Us</h2>
                    </div>
                    <!~~ Testimonial Slide ~~>
                    <div class="testimonial-slides owl-carousel mb-100">

                        <!~~ Single Testimonial Slide ~~>
                        <div class="single-testimonial-slide">
                            <h5>“This can be achieved by applying search engine optimization or popularly known as SEO. This is a marketing strategy which increases the quality and quantity of traffic flow to a particular website via search engines.”</h5>
                            <div class="rating-title">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h6>Robert Downey <span>- CEO Deercreative</span></h6>
                            </div>
                        </div>

                        <!~~ Single Testimonial Slide ~~>
                        <div class="single-testimonial-slide">
                            <h5>“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus delectus facilis molestias, error vitae praesentium quos eaque qui ea, tempore blanditiis sint reprehenderit, quaerat. Commodi ab architecto sit suscipit exercitationem!”</h5>
                            <div class="rating-title">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h6>Akash Downey <span>- CEO Deercreative</span></h6>
                            </div>
                        </div>

                        <!~~ Single Testimonial Slide ~~>
                        <div class="single-testimonial-slide">
                            <h5>“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, ex quos. Alias a rem maiores, possimus dicta sit distinctio quis iusto!”</h5>
                            <div class="rating-title">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h6>Downey Sarah <span>- CEO Deercreative</span></h6>
                            </div>
                        </div>

                        <!~~ Single Testimonial Slide ~~>
                        <div class="single-testimonial-slide">
                            <h5>“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore sequi laboriosam fugit suscipit aspernatur, minima minus voluptatum, id ab atque similique ex earum. Magni.”</h5>
                            <div class="rating-title">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h6>Robert Brown <span>- CEO Deercreative</span></h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- Testimonials Area End -->

    <!-- Projects Area Start -->
    <section class="roberto-project-area">
        <!-- Projects Slide -->
        <div class="projects-slides owl-carousel">
            <!-- Single Project Slide -->
            <div class="single-project-slide active bg-img" style="background-image: url(<?php echo $url; ?>vistas/img/HD/facial2.jpg);">
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
            <div class="single-project-slide bg-img" style="background-image: url(<?php echo $url; ?>vistas/img/HD/O6RXL30.jpg);">
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
            <div class="single-project-slide bg-img" style="background-image: url(<?php echo $url; ?>vistas/img/HD/salon5.jpg);">
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
            <div class="single-project-slide bg-img" style="background-image: url(<?php echo $url; ?>vistas/img/HD/tc.jpg);">
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
            <div class="single-project-slide bg-img" style="background-image: url(<?php echo $url; ?>vistas/img/HD/mani2.jpg);">
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

    <!-- Blog Area Start -->
    <section class="roberto-blog-area section-padding-100-0">
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
                            <img src="<?php echo $urlServidor; ?>imagenes/<?php echo $post['thumb']; ?>" alt="<?php echo $post['titulo'] ?>">
                        </a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a href="#" class="post-date"><?php echo fecha($post['fecha']); ?></a>
                            <a href="#" class="post-catagory"></a>
                        </div>
                        <!-- Post Title -->
                        <a class="post-title" href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo'] ?></a>
                        <p class="extracto"><?php echo $post['extracto'] ?></p>
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
                        <li><a href="index.php?p=<?php echo pagina_actual() - 1?>">&laquo;</a></li>
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
                                <a href="index.php?p=<?php echo $i?>"><?php echo $i; ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endfor; ?>

                    <!-- Mostramos el boton para avanzar una pagina -->
                    <?php if (pagina_actual() == $numero_paginas): ?>
                        <li class="disabled">&raquo;</li>
                    <?php else: ?>
                        <li><a href="index.php?p=<?php echo pagina_actual() + 1; ?>">&raquo;</a></li>
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

