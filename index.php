<?php require 'variables/variables.php';
require 'controllers/indexController.php';
require 'controllers/noticiasController.php';
require 'controllers/generalController.php';
require 'controllers/indexDB.php';?>
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
                    <?php
                        while ( $res = mysqli_fetch_array( $sql ) ) {
                            $active = ($res[0] == 1) ? "active" : "";
                            $href = ($res[2] != "") ? 'href="' . $res[2] . '" target="_blank"' : "";
                            echo '
                                <a ' . $href . ' class="carousel-item ' . $active . '">
                                    <img  class="d-block w-100 brillo-5" src="Lacumbre_Admin/admin/' . $res["1"] . '"/>
                                    <div class="carousel-content container">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h2>' . $res['3'] . '</h2>
                                        </div>
                                    </div>
                                </a>';
                        } ?>
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
                        <h2 class="font-weight-lighter suzohapp-light-blue text-center py-4">Recorridos 3D</h2>
                    </div>
                </div>
                <div class="row">
                    <div id="related-products-slider-container" class="owl-container col">
                        <div class="owl-carousel owl-theme card-group">
                            <?php
                            if (isset($general_array)) {
                                modelo_panorama($general_array);
                                } else {
                                    echo '<div class="col 12">
                                            <h3 class="text-center">Muy pronto publicaremos contenido para ti<h3>
                                        </div>';
                                }
                            ?>
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
        
        <section class="buscador pb-4">
            <div class="container container-fluid">
                <div class="row">
                    <div class="col">
                        <h2 class="font-weight-lighter suzohapp-light-blue text-center py-4 text-light">Videos</h2>
                    </div>
                </div>
                <div class="row">
                    <div id="related-products-slider-container" class="owl-container col">
                        <div class="owl-carousel owl-theme card-group" id="gallery">
                            <?php
                            if (isset($general_array)) {
                                modelo_youtube($general_array);
                                } else {
                                    echo '<div class="col 12">
                                            <h3 class="text-center">Muy pronto publicaremos contenido para ti<h3>
                                        </div>';
                                }
                            ?>
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
    <?php
        if (isset($general_array)) {
            modelo_panorama_modales($general_array);
            }
        ?>
    
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
                autoWidth: false,
                center: true,
                startPosition: 1,
                autoplay: true,
                autoplayTimeout: 4000,
                navigation: true,
                rewind: true,
                autoplayHoverPause:false,
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
