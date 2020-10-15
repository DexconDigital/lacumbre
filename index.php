<?php require 'variables/variables.php';
require 'controllers/indexController.php';
require 'controllers/noticiasController.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <?php
  $page = 'Inicio';
  include 'layout/archviosheader.php'; ?>
</head>
 
<body>
  <!-- definir estilo menu, true= transparente false= blanco  -->
  <script>
    var isTransparent = true;
  </script>
  <!-- ***********************Menu********************** -->
  <section>
    <?php include 'layout/menu.php' ?>
  </section>


  <!-- **************************Contenido ********************************** -->
  <div class="">
    <!-- hero -->
    <section id="carousel_inicio">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/slide_1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2>En La Cumbre, Trabajamos para encontrar tu inmueble ideal</h2>
            </div>
          </div>
          <div class="carousel-item ">
            <img src="images/slide_2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2>Más de 12 años acompañando y creando relaciones <br> con nuestros clientes</h2>

            </div>
          </div>
          <div class="carousel-item ">
            <img src="images/slide_3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2>Generamos tranquilidad, confianza y seguridad</h2>

            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <!-- Buscador -->
    <section class="buscador">
      <?php include 'layout/buscador.php'; ?>
    </section>
    <!-- Propiedades destacadas -->
      <section id="destacadas" class="wow fadeIn">
      <div class="container mb-4">
        <div class=" col-md-12 justify-content-center">
          <div class="col-12 text-center mt-3 mb-3">
            <h2>Propiedades destacadas</h2>
          </div>

          <!-- traer inmuebles destacados -->
          <div class="d-flex justify-content-center flex-wrap ">
            <?php
            if (is_array($api)) {
              inmuebles_destacados($api);
            } else {
              echo '<h2 class="text-center" >No tiene Inmuebles Destacados</h2>';
            }
            ?>
          </div>

        </div>

      </div>
    </section>
    

    
  </div>

  <!-- *****************Footer*********** -->
  <?php include 'layout/footer.php' ?>

  <!-- *******************Scripts********************* -->
  <?php include 'layout/archivosfooter.php' ?>
  <script src="conexion_api/buscador.js"></script>
  <!--  contador -->
  <script src="js/countUp.min.js"></script>
  <script src="js/counter-propertys.js"></script>
  

</body>

</html>