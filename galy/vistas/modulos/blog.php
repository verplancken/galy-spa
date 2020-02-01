

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(<?php echo $url; ?>vistas/img/HD/facial.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Noticias</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $rutas[0] ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Blog Area Start -->
    <div class="roberto-news-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">

                    <!-- Single Blog Post Area -->
                     <?php foreach($posts2 as $post): ?>
                    <div class="single-blog-post d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                        <a href="<?php echo $urlServidor; ?>single.php?id=<?php echo $post['id']; ?>">
                            <img src="<?php echo $urlServidor; ?>imagenes/<?php echo $post['thumb']; ?>" alt="<?php echo $post['titulo'] ?>">
                        </a>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a href="#" class="post-author"><?php echo fecha($post['fecha']); ?></a>
                            </div>
                            <!-- Post Title -->
                            <a class="post-title" href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo'] ?></a>
                            <p><?php echo $post['extracto'] ?></p>
                            <a href="<?php echo $urlServidor; ?>single.php?id=<?php echo $post['id']; ?>" class="btn continue-btn">Leer Más</a>
                        </div>
                    </div>
                    <?php endforeach; ?>  
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
                        <li><a href="blog?p=<?php echo pagina_actual() - 1?>">&laquo;</a></li>
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
                                <a href="blog?p=<?php echo $i?>"><?php echo $i; ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endfor; ?>

                    <!-- Mostramos el boton para avanzar una pagina -->
                    <?php if (pagina_actual() == $numero_paginas): ?>
                        <li class="disabled">&raquo;</li>
                    <?php else: ?>
                        <li><a href="blog?p=<?php echo pagina_actual() + 1; ?>">&raquo;</a></li>
                    <?php endif; ?>
                </ul>
            </section>
            <!-- Paginacion -->
                </div>

                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="roberto-sidebar-area pl-md-4">

                        <!-- Newsletter -->
                        <div class="single-widget-area mb-100">
                            <div class="newsletter-form">
                                <h5>Boletin informativo</h5>
                                <p>Suscríbase a nuestro boletín de noticias y reciba nuevas actualizaciones.</p>
                                
                                <form action="#" method="post">
                                    <input type="email" name="nl-email" id="nlEmail" class="form-control" placeholder="Enter your email...">
                                    <button type="submit" class="btn roberto-btn w-100">Subscribirse</button>
                                </form>
                            </div>
                        </div>

                        <!-- Recent Post -->
<!--                        <div class="single-widget-area mb-100">
                            <h4 class="widget-title mb-30">Recent News</h4>

                            <!~~ Single Recent Post ~~>
                            <div class="single-recent-post d-flex">
                                <!~~ Thumb ~~>
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="<?php echo $url; ?>vistas/img/bg-img/29.jpg" alt=""></a>
                                </div>
                                <!~~ Content ~~>
                                <div class="post-content">
                                    <!~~ Post Meta ~~>
                                    <div class="post-meta">
                                        <a href="#" class="post-author">Jan 29, 2019</a>
                                        <a href="#" class="post-tutorial">Event</a>
                                    </div>
                                    <a href="single-blog.html" class="post-title">Proven Techniques Help You Herbal Breast</a>
                                </div>
                            </div>

                            <!~~ Single Recent Post ~~>
                            <div class="single-recent-post d-flex">
                                <!~~ Thumb ~~>
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="<?php echo $url; ?>vistas/img/bg-img/30.jpg" alt=""></a>
                                </div>
                                <!~~ Content ~~>
                                <div class="post-content">
                                    <!~~ Post Meta ~~>
                                    <div class="post-meta">
                                        <a href="#" class="post-author">Jan 29, 2019</a>
                                        <a href="#" class="post-tutorial">Event</a>
                                    </div>
                                    <a href="single-blog.html" class="post-title">Cooking On A George Foreman Grill</a>
                                </div>
                            </div>

                            <!~~ Single Recent Post ~~>
                            <div class="single-recent-post d-flex">
                                <!~~ Thumb ~~>
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="<?php echo $url; ?>vistas/img/bg-img/31.jpg" alt=""></a>
                                </div>
                                <!~~ Content ~~>
                                <div class="post-content">
                                    <!~~ Post Meta ~~>
                                    <div class="post-meta">
                                        <a href="#" class="post-author">Jan 29, 2019</a>
                                        <a href="#" class="post-tutorial">Event</a>
                                    </div>
                                    <a href="single-blog.html" class="post-title">Selecting The Right Hotel</a>
                                </div>
                            </div>

                            <!~~ Single Recent Post ~~>
                            <div class="single-recent-post d-flex">
                                <!~~ Thumb ~~>
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="<?php echo $url; ?>vistas/img/bg-img/32.jpg" alt=""></a>
                                </div>
                                <!~~ Content ~~>
                                <div class="post-content">
                                    <!~~ Post Meta ~~>
                                    <div class="post-meta">
                                        <a href="#" class="post-author">Jan 29, 2019</a>
                                        <a href="#" class="post-tutorial">Event</a>
                                    </div>
                                    <a href="single-blog.html" class="post-title">Comment Importance Of Human Life</a>
                                </div>
                            </div>
                        </div>-->

                        <!-- Popular Tags -->
<!--                        <div class="single-widget-area mb-100 clearfix">
                            <h4 class="widget-title mb-30">Tags</h4>
                            <!~~ Popular Tags ~~>
                            <ul class="popular-tags">
                                <li><a href="#">Bed,</a></li>
                                <li><a href="#">Hotel,</a></li>
                                <li><a href="#">Travel,</a></li>
                                <li><a href="#">Restaurant,</a></li>
                                <li><a href="#">Sport,</a></li>
                                <li><a href="#">Trip,</a></li>
                                <li><a href="#">Music,</a></li>
                                <li><a href="#">Holiday,</a></li>
                                <li><a href="#">Tourist,</a></li>
                                <li><a href="#">Foody,</a></li>
                                <li><a href="#">Resorts.</a></li>
                            </ul>
                        </div>

                        <!~~ Instagram ~~>
                        <div class="single-widget-area mb-100 clearfix">
                            <h4 class="widget-title mb-30">Instagram</h4>
                            <!~~ Instagram Feeds ~~>
                            <ul class="instagram-feeds">
                                <li><a href="#"><img src="img/bg-img/33.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/bg-img/34.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/bg-img/35.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/bg-img/36.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/bg-img/37.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/bg-img/38.jpg" alt=""></a></li>
                            </ul>
                        </div>-->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->

    <!-- Partner Area Start -->
    <div class="partner-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partner-logo-content d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p1.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p2.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p3.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p4.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
