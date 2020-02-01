    <?php
        include ("config/conexion.php");
        $sql_slider=mysqli_query($con,"select * from slider where estado=1 order by orden");
        $nums_slides=mysqli_num_rows($sql_slider);
    ?>
    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
                    <?php
                        $active="active";
                        while ($rw_slider=mysqli_fetch_array($sql_slider)){
                    ?>
            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(<?php echo $urlServidor; ?>img/slider/<?php echo $rw_slider['url_image'];?>);" data-img-url="<?php echo $urlServidor; ?>img/slider/<?php echo $rw_slider['url_image'];?>">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInLeft" data-delay="200ms"><?php echo $rw_slider['descripcion'];?></h6>
                                    <h2 data-animation="fadeInLeft" data-delay="500ms"><?php echo $rw_slider['titulo'];?></h2>
                                    <!--<a href="Tratamientos-Faciales" class="btn roberto-btn btn-2" data-animation="fadeInLeft" data-delay="800ms">Ver más</a>-->
                                    <a class='btn btn-lg btn-<?php echo $rw_slider['estilo_boton'];?> text-right' data-animation="fadeInLeft" data-delay="800ms" href="<?php echo $rw_slider['url_boton'];?>" style="padding: 15px;"><?php echo $rw_slider['texto_boton'];?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                            <?php
                            $active="";
                        }
                    ?>
            <!-- Single Welcome Slide -->        
        </div>
    </section>
    <!-- Welcome Area End -->