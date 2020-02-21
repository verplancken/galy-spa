    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area contact-breadcrumb bg-img bg-overlay jarallax" style="background-image: url(<?php echo $url; ?>vistas/img/HD/BG-SPA4.JPG);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content text-center mt-100">
                        <h2 class="page-title"><?php echo $rutas[0] ?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $rutas[0] ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Our Room Area Start -->
    <section class="roberto-rooms-area">
        <div class="rooms-slides owl-carousel">
            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(<?php echo $url; ?>vistas/img/HD/masaje2.jpg);"></div>

                <!-- Content -->
                <div class="room-content" >
                    <h2 data-animation="fadeInUp" data-delay="100ms">Contamos con:</h2>
                    <h3 data-animation="fadeInUp" data-delay="100ms"> <span></span></h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="100ms">
                        <li><span><i class="fa fa-check"></i>Holistico o desodorante</span> <span>  </span>- Duracion 50 minutos</li>
                         <li><span><i class="fa fa-circle"></i> Maniobras armonicas que tiene una reaciion benefica de tipo muscular , biologico,metabolico y hasta psicologico.Donde la terapeuta experta valora , a traves de la palpacion, el grado de tension psicofisica que  afecta el paciente y se aplica mediante la presión mecanica de sus manos, la seguridad y confort requeridos.</span> <span></span></li>
                        <li><span><i class="fa fa-check"></i> Drenaje Linfatico</span> <span></span>- Duracion 120 minutos</li>
                        <li><span><i class="fa fa-circle"></i> Debido a sus multiples beneficiosactiva la circulacion , mejora los intercambios celulares, refuerza el sistema inmunologico ,disminuye el estres y reduce la apariencia celulitis .Consiste en movimiento suaves y superficiales que ayudan al drenaje de las celulas de agua ,grasa y toxinas ,estimulando los movimientos paristalticos para una mejor eliminacion.</span> <span></span></li>

                        <li><span><i class="fa fa-check"></i> Rejuvenecimientos</span> <span></span>- Duracion 50 minutos</li>
                        <li><span><i class="fa fa-circle"></i> Altamente recomendado para aquellas personas que desean desafiar el paso del tiempo y atenuar los signos visibles de envejecimiento prematuro, tales como flacidez, sequedad, tono opaco y arrigas.</span> <span></span></li>
                    </ul>
                   <!-- <a href="#" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Details</a>-->
                </div>
            </div>

            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(<?php echo $url; ?>vistas/img/HD/masaje3.jpg);"></div>

                <!-- Content -->
                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="10ms">Contamos con:</h2>
                    <h3 data-animation="fadeInUp" data-delay="10ms"> <span></span></h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="10ms">
                        <li><span><i class="fa fa-check"></i> Pre y Post operatorio facial</span> <span></span>- Duracion 50 minutos</li>
                        <li><span><i class="fa fa-circle"></i>Es muy importante tener una piel Hidratada y oxigenada antes y despues de realizar cualquier procedimiento dermatologico o quirurgico , tomando en cuenta el tipo de cirugia y las indicaciones medicas realizamos tratamientos personalizados que ayudan a eliminar las toxinas que quedan en el cuerpo u disminuir hematomas.</i></span> <span></span></li>

                    </ul>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Our Room Area End --> 

        <?php
// Archivo de conexion con la base de datos

// Condicional para validar el borrado de la imagen
if(isset($_GET['delete_id']))
{
  // Selecciona imagen a borrar
  $stmt_select = $DB_con->prepare('SELECT Imagen_Img FROM masajes WHERE Imagen_ID =:uid');
  $stmt_select->execute(array(':uid'=>$_GET['delete_id']));
  $imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
  // Ruta de la imagen
  unlink("imagenes/".$imgRow['Imagen_Img']);
  
  // Consulta para eliminar el registro de la base de datos
  $stmt_delete = $DB_con->prepare('DELETE FROM masajes WHERE Imagen_ID =:uid');
  $stmt_delete->bindParam(':uid',$_GET['delete_id']);
  $stmt_delete->execute();
  // Redireccioa al inicio
  header("Location: index.php");
}

?>



<div class="container-afbef text-center">
    <?php
  
  $stmt = $DB_con->prepare('SELECT Imagen_ID, Imagen_Marca, Imagen_Tipo, Imagen_Img, Imagen_Img2 FROM masajes ORDER BY Imagen_ID DESC');
  $stmt->execute();
  
  if($stmt->rowCount() > 0){
    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
      extract($row);
      ?>

 <div class="inner">
   <h1 class="p-2"><?php echo $Imagen_Marca; ?></h1>
   <h3><?php echo $Imagen_Tipo; ?></h3>
   <div class="comparison-slider-wrapper">
    <!-- Comparison Slider - this div contain the slider with the individual images captions -->
    <div class="comparison-slider">
     <img class="afterbf" src="<?php echo $url; ?>vistas/imagenes/<?php echo $row['Imagen_Img']; ?>" alt="<?php echo $row['Imagen_Img']; ?>" style="max-width: 1000%;">
     <!-- Div containing the image layed out on top from the left -->
     <div class="resize">
      <img class="afterbf" src="<?php echo $url; ?>vistas/imagenes/<?php echo $row['Imagen_Img2']; ?>" alt="<?php echo $row['Imagen_Img']; ?>" style="max-width: 1000%;">
     </div>
     <!-- Divider where user will interact with the slider -->
     <div class="divider"></div>
    </div>
   </div>  
 </div>
    <?php
    }
  }
  else
  {
    ?>
    <div class="col-xs-12">
      <div class="alert alert-warning"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Datos no encontrados ... </div>
    </div>
    <?php
  }
  
?>
</div>

 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

<script type="text/javascript">
$(document).ready(function () {

  // If the comparison slider is present on the page lets initialise it, this is good you will include this in the main js to prevent the code from running when not needed
  if ($(".comparison-slider")[0]) {
    let compSlider = $(".comparison-slider");

    //let's loop through the sliders and initialise each of them
    compSlider.each(function () {
      let compSliderWidth = $(this).width() + "px";
      $(this).find(".resize img").css({ width: compSliderWidth });
      drags($(this).find(".divider"), $(this).find(".resize"), $(this));
    });

    //if the user resizes the windows lets update our variables and resize our images
    $(window).on("resize", function () {
      let compSliderWidth = compSlider.width() + "px";
      compSlider.find(".resize img").css({ width: compSliderWidth });
    });
  }
});

// This is where all the magic happens
// This is a modified version of the pen from Ege Görgülü - https://codepen.io/bamf/pen/jEpxOX - and you should check it out too.
function drags(dragElement, resizeElement, container) {

  // This creates a variable that detects if the user is using touch input insted of the mouse.
  let touched = false;
  window.addEventListener('touchstart', function () {
    touched = true;
  });
  window.addEventListener('touchend', function () {
    touched = false;
  });

  // clicp the image and move the slider on interaction with the mouse or the touch input
  dragElement.on("mousedown touchstart", function (e) {

    //add classes to the emelents - good for css animations if you need it to
    dragElement.addClass("draggable");
    resizeElement.addClass("resizable");
    //create vars
    let startX = e.pageX ? e.pageX : e.originalEvent.touches[0].pageX;
    let dragWidth = dragElement.outerWidth();
    let posX = dragElement.offset().left + dragWidth - startX;
    let containerOffset = container.offset().left;
    let containerWidth = container.outerWidth();
    let minLeft = containerOffset + 10;
    let maxLeft = containerOffset + containerWidth - dragWidth - 10;

    //add event listner on the divider emelent
    dragElement.parents().on("mousemove touchmove", function (e) {

      // if the user is not using touch input let do preventDefault to prevent the user from slecting the images as he moves the silder arround.
      if (touched === false) {
        e.preventDefault();
      }

      let moveX = e.pageX ? e.pageX : e.originalEvent.touches[0].pageX;
      let leftValue = moveX + posX - dragWidth;

      // stop the divider from going over the limits of the container
      if (leftValue < minLeft) {
        leftValue = minLeft;
      } else if (leftValue > maxLeft) {
        leftValue = maxLeft;
      }

      let widthValue = (leftValue + dragWidth / 2 - containerOffset) * 100 / containerWidth + "%";

      $(".draggable").css("left", widthValue).on("mouseup touchend touchcancel", function () {
        $(this).removeClass("draggable");
        resizeElement.removeClass("resizable");
      });

      $(".resizable").css("width", widthValue);

    }).on("mouseup touchend touchcancel", function () {
      dragElement.removeClass("draggable");
      resizeElement.removeClass("resizable");

    });

  }).on("mouseup touchend touchcancel", function (e) {
    // stop clicping the image and move the slider
    dragElement.removeClass("draggable");
    resizeElement.removeClass("resizable");

  });

}
</script>
