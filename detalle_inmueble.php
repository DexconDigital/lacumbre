<?php
require 'variables/variables.php';
require 'controllers/detalleInmuebleController.php';
require 'controllers/noticiasController.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    $page = 'Detalle inmueble';
    include 'layout/archviosheader.php'; ?>
    <link rel="stylesheet" href="./css/carousel.tamanos.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/slick-theme.css">
    <!--scrip importante -->

    <link rel="stylesheet" href="css/carousel.inmuebles.css">
    <link rel="stylesheet" href="mapas/leaflet.css" crossorigin="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
    <meta property="og:title" content="<?php echo $r['Tipo_Inmueble'] . ' en ' . $r['Gestion']; ?>" />
    <meta property="og:description" content="Inmueble ubicado en: <?php echo $r['barrio'] . ', ' . $r['ciudad'] . ', ' . $r['depto']; ?> " />
    <meta property="og:image" itemprop="image" content="<?php echo $r['fotos'][0]['foto']; ?>" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <style>
        #map {
            height: 350px;
            z-index: 20;
        }

        .leaflet-control {
            z-index: 200;
        }

        .leaflet-control {
            z-index: 20;
        }
    </style>
</head>

<body>

    <link itemprop="thumbnailUrl" href="<?php echo $r['fotos'][0]['foto']; ?>">
    <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
        <link itemprop="url" href="<?php echo $r['fotos'][0]['foto']; ?>">
    </span>

    <!-- definir estilo menu, true= transparente false= blanco  -->
    <script>
        var isTransparent = false;
    </script>
    <!-- ***********************Menu********************** -->
    <?php include 'layout/menu.php' ?>

    <!-- **************************Contenido ********************************** -->
    <div class="container-fluid body">

        <section class="margen_detalle_inm">
            <div class="container" style="margin-top: 40px;">
                <div class="col-md-12">
                    <div class="row">
                    <div class="col-lg-7 col-md-12 col-12">
                        <!-- main slider carousel items -->
                        <section class="mt-3" id="slide-detalle">
                            <?php
                            if (isset($r['fotos'])) {
                                for ($i = 0; $i < count($r['fotos']); $i++) {
                                    echo '<div class="contenedor-img">
                                        <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
                                    </div>';
                                }
                            } else {
                                echo  '<div class="contenedor-img">
                                        <img src="images/no_image.png" alt="">
                                    </div>';
                            }
                            ?>
                        </section>
                        <section class="vertical-center-4 slider" id="miniaturas">
                            <?php
                            if (isset($r['fotos'])) {
                                for ($i = 0; $i < count($r['fotos']); $i++) {
                                    echo '<div class="contenedor-img">
                                        <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
                                    </div>';
                                }
                            } else {
                                echo  '<div class="contenedor-img">
                                        <img src="images/no_image.png" alt="">
                                    </div>';
                            }
                            ?>
                        </section>
                        <!-- Compartir por redes sociales -->
                        <div class="col-md-12 row  ">
                            <div class="col-md-6 col-lg-6 col-12 contenerdor_booton_conta">
                                <button type="button" class="btn color_comparit rounded-0 col-6 compartir_boton" name=""><a class="color_blanco_url" href="https://simicrm.app/mcomercialweb/fichas_tecnicas/fichatec3.php?reg=971-<?php echo $co ?>" target="_blank">Imprimir ficha</a></button>
                            </div>
                            <div class="col-md-4 col-lg-4 col-6 col-sm-1 mr-2 icon_foot row">
                                <h5 class="compartir">Compartir por :</h5>
                            </div>
                            <div class="col-md-2 row  d-flex flex-row-reverse bd-highlight container_icon_compartir">
                                <div class="col-md-5 col-2 col-sm-1 mr-1 icon_foot   row"><a class="color_whapp" href="<?php echo 'https://wa.me/?text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] . '%20Descripción:%20' . $r['descripcionlarga'] . '%20https://lacumbreinmobiliaria.com/detalle_inmueble.php?co=' . $co ?>" target="_blank"><i class="fab fa-whatsapp"></i></a></div>
                                <div class="col-md-5 col-2 col-sm-1 mr-2 icon_foot   row"><a href="<?php echo 'https://twitter.com/intent/tweet?url=https://lacumbreinmobiliaria.com/detalle_inmueble.php?co=' . $co . '&text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] ?>" target="_blank"><i class="fab fa-twitter "></i></a></div>
                                <div class="col-md-5 col-2 col-sm-1 mr-1 icon_foot   row"><a class="color_face" href="https://www.facebook.com/sharer/sharer.php?u=https://lacumbreinmobiliaria.com/detalle_inmueble.php?co=<?php echo $co; ?>" target="_blank"><i class="fab fa-facebook-f "></i></a></div>
                            </div>

                        </div>
                        <!-- script para iniciar el caousel -->
                        <!-- descripcion -->
                        <div class="col-md-12 mt-4" style="margin-bottom: 12px;">
                            <div class="d-flex justify-content-between property-single-detail-title">
                                <h4 class=""><strong>Características</strong></h4>
                                <div>
                                    <?php
                                        if ($video360 != "") { ?>
                                        <a class="btn color_comparit text-light rounded-0" type="button" data-toggle="modal" data-target="#video360">Ver 360</a>
                                     <?php } 
                                        if ($video != "") { ?>
                                        <a class="btn color_comparit text-light rounded-0" type="button" data-toggle="modal" data-target="#video">Ver Video</a>
                                     <?php } ?>
                                </div>
                            </div>
                            <ul class="pl-4">
                                <li>Código: <?php echo $co; ?></li>
                                <li>Alcobas: <?php echo $alcobas; ?></li>
                                <li>Baños: <?php echo $banios; ?></li>
                                <li>Área Construida: <?php echo $area_construida; ?>m<sup>2</sup></li>
                                <li>Área Privada: <?php echo $area_privada; ?>m<sup>2</sup></li>
                                <li>Garaje: <?php echo $garaje; ?></li>
                                <li>Estrato: <?php echo $estrato; ?></li>
                                <li>Edad Inmueble: <?php echo $edad_inmueble; ?> años</li>
                                <?php if ($administracion != "") {
                                    echo '<li>Administración: $' . $administracion . '</li>';
                                } ?>
                            </ul>
                        </div>
                        <!-- fin de descripcion -->
                        <?php
                        if (count($r['caracteristicasInternas']) > 0) {
                            echo
                                '<div class="col-md-12" style="margin-bottom: 12px;">
                                    <h4 class="property-single-detail-title"><strong>Características Internas</strong></h4>
                                        <ul>';
                            for ($i = 0; $i < count($r['caracteristicasInternas']); $i++) {
                                $caracteristicas = ltrim($r['caracteristicasInternas'][$i]['Descripcion']);
                                echo '<li>' . $caracteristicas . '</li>';
                            }
                            echo  '</ul>
                                </div>
                            ';
                        }
                        ?>
                        <?php
                        if (count($r['caracteristicasExternas']) > 0) {
                            echo
                                '<div class="col-md-12" style="margin-bottom: 12px;">
                                    <h4 class="property-single-detail-title"><strong>Características Externas</strong></h4>
                                        <ul>';
                            for ($i = 0; $i < count($r['caracteristicasExternas']); $i++) {
                                $caracteristicas = ltrim($r['caracteristicasExternas'][$i]['Descripcion']);
                                echo '<li>' . $caracteristicas . '</li>';
                            }
                            echo  '</ul>
                                </div>
                            ';
                        }
                        ?>

                        <?php
                        if (count($r['caracteristicasAlrededores']) > 0) {
                            echo
                                '<div class="col-md-12" style="margin-bottom: 12px;">
                                    <h4 class="property-single-detail-title"><strong>Características de los alrededores</strong></h4>
                                        <ul>';
                            for ($i = 0; $i < count($r['caracteristicasAlrededores']); $i++) {
                                $caracteristicas = ltrim($r['caracteristicasAlrededores'][$i]['Descripcion']);
                                echo '<li>' . $caracteristicas . '</li>';
                            }
                            echo  '</ul>
                                </div>
                            ';
                        }
                        ?>


                        <div class="col-md-12">
                            <!-- Video -->
                        </div>

                        <div class="col-md-12 mb-4">
                            <h4 class="property-single-detail-title"><strong>Mapa de Ubicación</strong></h4>
                            <div class="card mapa_tamaño">
                                <div class="">
                                    <div id="map" class="w-100"></div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="col-lg-5 col-md-12 col-12">
                        <div class="margen_simialres">
                            <div class="search-box daily-email bg2 text-center mb-3">
                                <h5 class="titulo_similares" class="mb-0">Propiedades similares</h5>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <?php similares($r['IdCiudad'], $r['IdTpInm']); ?>
                                </div>
                            </div>
                        </div>
                        <div class="search-box daily-email bg2 text-center">
                            <div>
                                <h5 class="titulo_similares" class="mb-0">Contacto con el asesor</h5>
                            </div>

                            <div class="col-md-12">

                                <div class="side-bar-agent-detail mt-3">
                                    <figure>
                                        <img class="cont_img" src="<?php echo $asesor['FotoAsesor']; ?>" alt="">
                                    </figure>
                                    <div class="col-12  mt-2 text-center">
                                        <div><?php echo $asesor['ntercero']; ?></div>
                                        <div><i class=""></i><a class="color_negro" href="tel:+57<?php echo $asesor['celular']; ?>"><?php echo $asesor['celular']; ?></a></div>
                                        <div><i class=""></i><a class="color_negro" href="mailto:"><?php echo $asesor['correo']; ?></a></div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

               
               
                    </div>
                 </div>
            </div>
        </section>
    </div>

    <?php
    if ($video360 != "") {
        echo '
        <!-- Modal Video 360-->
        <div class="modal fade" id="video360" tabindex="-1" aria-labelledby="video360" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="video360">Video 360</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe src="'.$video360.'" class="w-100" style="height:40rem"></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>';
    }
    if ($video != "") {
        echo '
        <!-- Modal Video-->
        <div class="modal fade" id="video" tabindex="-1" aria-labelledby="video" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="video">Video</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe src="'.$video.'" class="w-100" style="height:40rem"></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>';
    }
    ?>
    <!-- *****************Footer*********** -->
    <?php include 'layout/footer.php' ?>

    <!-- *******************Scripts********************* -->
    <?php include 'layout/archivosfooter.php' ?>
    <script src="js/slick.min.js"></script>
    <script>
        $('#slide-detalle').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '#miniaturas'
        });
        $('#miniaturas').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '#slide-detalle',
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            variableWidth: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>


    <!-- mapa del inmueble -->
    <script src="mapas/leaflet.js" crossorigin=""></script>
    <script>
        var map = L.map('map').setView([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>], 14);


        L.tileLayer('https://api.maptiler.com/maps/streets/256/{z}/{x}/{y}.png?key=1rAGHv3KcO1nrS6S9cgI', {
            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>'
        }).addTo(map);

        L.circle([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>], {
            radius: 500,
            color: 'red',
            fillColor: 'red',
            opacity: .75,
        }).addTo(map);
    </script>

</body>

</html>