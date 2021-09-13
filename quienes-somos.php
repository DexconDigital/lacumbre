    <?php require 'variables/variables.php';
require 'controllers/noticiasController.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    $page = 'Quienes Somos';
    include 'layout/archviosheader.php'; ?>
</head>

<body>
    <!-- definir estilo menu, true= transparente false= blanco  -->
    <script>
        var isTransparent = false;
    </script>
    <!-- ***********************Menu********************** -->
    <section>
        <?php include 'layout/menu.php' ?>
    </section>


    <!-- **************************Contenido ********************************** -->
    <div class="container-fluid body">

        <section id="servicios" class="separador wow fadeIn" data-wow-duration="2s">
            <div id="mision" class="container">
                <div class="col-md-12 row mb-4">
                    <div class="col-lg-8 col-md-7  magen_container_servi">
                        <div class="col-md-12  text-center">
                            <h1 class="color_servi gruesor_letra">La Cumbre Inmobiliaria</h1>
                        </div>
                        <div class="col-md-12 ">
                            <p><?php echo $texto_quienes_somos['quienes_somos']['parrafos'][0]  ?> </p>
                            <p><?php echo $texto_quienes_somos['quienes_somos']['parrafos'][1]  ?> </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 row">
                        <img class="quienes_img" src="images/Logo.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!--contador -->
        <section id="contador" class="separador">
            <?php include 'layout/contador.php' ?>
        </section>
        
        <!-- mision  -->
        <section id="servicios" class="separador wow bounceInLeft" data-wow-duration="2s">
            <div id="mision" class="container">
                <div class="col-md-12 row mb-4">
                    <div class="col-lg-8 col-md-7  magen_container_servi">
                        <div class="col-md-12  text-center">
                            <h1 class="color_servi gruesor_letra"><?php echo $texto_quienes_somos['mision']['titulo'] ?></h1>
                        </div>
                        <div class="col-md-12  ">
                            <p name="ventas" class="texto_servi"><?php echo $texto_quienes_somos['mision']['parrafo'] ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 row">
                        <?php $r = $texto_quienes_somos['mision'];
                        echo '
                        <img class="img_venta" src="' . $r['imagen'] . '" alt="">'; ?>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- vision -->
        <section class="separador wow bounceInRight" data-wow-duration="2s">
            <div id="vision" class="container">
                <div class="col-md-12 row mb-4">
                    <div class="col-lg-5 col-md-7 mt-3">
                        <?php $r = $texto_quienes_somos['vision'];
                        echo '
                    <img class="img_vision" src="' . $r['imagen'] . '" alt="">'; ?>
                    </div>
                    <div class="col-lg-7 col-md-5  magen_container_servi cont_visiom">
                        <div class="col-md-12  text-center">
                            <h1 name="arriendos" class="color_servi gruesor_letra"><?php echo $texto_quienes_somos['vision']['titulo'] ?></h1>
                        </div>
                        <div class="col-md-12 ">
                            <p class="texto_servi"><?php echo $texto_quienes_somos['vision']['parrafo'] ?></p>
                        </div>
                    </div>
    
                </div>
            </div>
        </section>

        <!-- valores corporativos -->
        <section class="separador wow bounceInLeft" data-wow-duration="2s">
            <div id="valores" class="container">
                <div class="col-md-12 row mb-4">
                    <div class="col-lg-8 col-md-7 ">
                        <div class="col-md-12  text-center">
                            <h1 class="color_servi gruesor_letra"><?php echo $texto_quienes_somos['valores']['titulo'] ?></h1>
                        </div>
                        <div class="col-lg-12 col-md-12 cont_valores">
                            <p class="texto_servi"><?php echo $texto_quienes_somos['valores']['parrafos'][0] ?></p>
                            <p class="texto_servi"><?php echo $texto_quienes_somos['valores']['parrafos'][1] ?></p>
                            <p class="texto_servi"><?php echo $texto_quienes_somos['valores']['parrafos'][2] ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <?php $r = $texto_quienes_somos['valores'];
                        echo '
                    <img class="img_valores" src="' . $r['imagen'] . '" alt="">'; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="separador wow fadeIn" data-wow-duration="2s">
            <div class="container">
                <div class="col-md-12">
                    <h1 class="text-center"> Nuestros servicios</h1>
                </div>
                <div class="">
                    <div class="container  contenedor_banner">
                        <div class="row d-flex justify-content-between " id="cont_servi">
                            <div class="espacio_div col-xl-6 col-md-6 col-12 text-center color_estadis">
                                <div>

                                    <h1 id="counter-experence"><i class="fas fa-sign"></i></h1>
                                    <h5 class="color_negro"><?php echo $texto_servicios['arrendamientos']['titulo'] ?></h5>
                                    <p class="text-justify"><?php echo $texto_servicios['arrendamientos']['parrafos'][0] ?></p>
                                    <p class="text-justify"><?php echo $texto_servicios['arrendamientos']['parrafos'][1] ?></p>
                                </div>
                            </div>
                            <div class=" espacio_div col-xl-6 col-md-6 col-12 text-center color_estadis">
                                <div>

                                    <h1 id="counter-propertys"><i class="fas fa-tags"></i></h1>
                                    <h5 class="color_negro"><?php echo $texto_servicios['ventas']['titulo'] ?></h5>
                                    <p class="text-justify"><?php echo $texto_servicios['ventas']['parrafos'][0] ?></p>
                                    <p class="text-justify"><?php echo $texto_servicios['ventas']['parrafos'][1] ?></p>
                                </div>
                            </div>
                        </div>
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