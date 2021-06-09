<?php require 'variables/variables.php';
require 'controllers/indexController.php';
require 'controllers/noticiasController.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="euc-jp">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php
  $page = 'Inicio';
  include 'layout/archviosheader.php'; ?>

    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/lightgallery/latest/css/lightgallery.css" />
    <style>


    </style>
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
                        <!--<img src="images/Banner_Navidad.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">-->
                        <img src="images/Banner_1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>En La Cumbre, Trabajamos para encontrar tu inmueble ideal</h2>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="images/Banner_2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Más de 13 años acompañando y creando relaciones <br> con nuestros clientes</h2>

                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="images/Banner_3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Generamos tranquilidad, confianza y seguridad</h2>
                        </div>
                    </div>
                    <!-- <div class="carousel-item ">
            <img src="images/Banner_4.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item ">
            <img src="images/Banner_5.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item ">
            <img src="images/Banner_6.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item ">
            <img src="images/Banner_7.jpg" class="d-block w-100" alt="...">
          </div> -->
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

        <section>
            <div class="container container-fluid">
                <div class="row">
                    <div class="col">
                        <h2 class="font-weight-lighter suzohapp-light-blue text-center py-4">Videos youtube</h2>
                    </div>
                </div>
                <div class="row">
                    <div id="related-products-slider-container" class="owl-container col">
                        <div class="owl-carousel owl-theme card-group" id="gallery">
                            <div class="card ancho-card">
                                <a href="https://www.youtube.com/watch?v=uMphEiabsL4&t=1s" class="light-link">
                                    <img src="images/youtube1.jpg" class="" alt="...">
                                </a>
                            </div>
                            <div class="card ancho-card">
                                <a href="https://www.youtube.com/watch?v=QTU7wEZsPVg&t=6s" class="light-link">
                                    <img src="images/youtube2.jpg" class="" alt="...">
                                </a>
                            </div>
                            <div class="card ancho-card">
                                <a href="https://www.youtube.com/watch?v=3nbOehqu6IE" class="light-link">
                                    <img src="images/youtube3.jpg" class="" alt="...">
                                </a>
                            </div>
                        </div>
                        <div class="owl-theme">
                            <div class="owl-controls d-block">
                                <div class="custom-nav owl-nav"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container container-fluid">
                <div class="row">
                    <div class="col">
                        <h2 class="font-weight-lighter suzohapp-light-blue text-center py-4">Recorridos 3D</h2>
                    </div>
                </div>
                <div class="row">
                    <div id="related-products-slider-container" class="owl-container col">
                        <div class="owl-carousel owl-theme card-group">
                            <div class="card ancho-card">
                                <a type="button" data-toggle="modal" data-target="#tresd1" class="d-flex justify-content-center">
                                    <img src="images/360.png" class="w-50" alt="...">
                                </a>
                                <div class="card-body text-center">
                                    Casa en Parcelación - Las Palmas
                                </div>
                            </div>
                            <div class="card ancho-card">
                                <a type="button" data-toggle="modal" data-target="#tresd2" class="d-flex justify-content-center">
                                    <img src="images/360.png" class="w-50" alt="...">
                                </a>
                                <div class="card-body text-center">
                                   Casa Independiente Llano Grande
                                </div>
                            </div>
                            <div class="card ancho-card">
                                <a type="button" data-toggle="modal" data-target="#tresd3" class="d-flex justify-content-center">
                                    <img src="images/360.png" class="w-50" alt="...">
                                </a>
                                <div class="card-body text-center">
                                    Parcelación en Llano Grande - Tablazo
                                </div>
                            </div>
                        </div>
                        <div class="owl-theme">
                            <div class="owl-controls d-block">
                                <div class="custom-nav owl-nav"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

        <section class="mt-4 mb-4">
            <div class="col-12  d-flex flex-wrap">
                <div class="col-lg-6 col-md-12 col-12 d-flex justify-content-center align-items-center">
                    <h1 class="texto_lonja">Pertenecemos a:</h1>
                </div>
                <div class="col-lg-6 col-md-12 col-12 cont_logo">
                    <img src="images/Logo_Lonja-Afiliado.png" class="tamaño_lonja" alt="">
                </div>
            </div>
        </section>

    </div>

    <!-- Modal 3d 1-->
    <div class="modal fade" id="tresd1" tabindex="-1" aria-labelledby="Modal3d1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Casa en Parcelación - Las Palmas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="https://my.matterport.com/show/?m=AVDGUoTHqds" class="w-100" style="height:40rem"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal 3d 2-->
    <div class="modal fade" id="tresd2" tabindex="-1" aria-labelledby="Modal3d1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Casa Independiente Llano Grande</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="https://my.matterport.com/show/?m=rcDitSjMW4V" class="w-100" style="height:40rem"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal 3d 3-->
    <div class="modal fade" id="tresd3" tabindex="-1" aria-labelledby="Modal3d2" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Parcelación en Llano Grande - Tablazo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="https://my.matterport.com/show/?m=cxRaNe5w8GF" class="w-100" style="height:40rem"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- *****************Footer*********** -->
    <?php include 'layout/footer.php' ?>
    <!-- *******************Scripts********************* -->
    <?php include 'layout/archivosfooter.php' ?>
    <script src="conexion_api/buscador.js"></script>
    <!--  contador -->
    <script src="js/countUp.min.js"></script>
    <script src="js/counter-propertys.js"></script>
    <script src="https://cdn.jsdelivr.net/g/lightgallery,lg-autoplay,lg-fullscreen,lg-hash,lg-share,lg-thumbnail,lg-video,lg-zoom"></script>
    <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
    <script src="https://f.vimeocdn.com/js/froogaloop2.min.js"></script>

    <script>
        $(function() {
            $('.owl-carousel').owlCarousel({
                stagePadding: 80,
                loop: false,
                margin: 20,
                dots: true,
                items: 4,
                autoWidth: false,
                center: true,
                startPosition: 'URLHash',
                responsive: {
                    0: {
                        items: 1,
                        stagePadding: 0
                    },
                    768: {
                        items: 2,
                        stagePadding: 0
                    },
                    992: {
                        items: 2,
                        stagePadding: 60
                    },
                    1200: {
                        items: 3
                    }
                }
            })
            $('#gallery').lightGallery({
                selector: '.light-link'
            });
        });

    </script>
</body>

</html>
