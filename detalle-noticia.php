<?php
require 'variables/variables.php';
require 'controllers/inmueblesController.php';
require_once('controllers/detalle_noticiasController.php'); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    $page = 'Detalle noticias';
    include 'layout/archviosheader.php';
    require 'controllers/noticiasController.php'; ?>
</head>

<body>
    <!-- definir estilo menu, true= transparente false= blanco  -->
    <script>
        var isTransparent = false;
    </script>
    <!-- ***********************Menu********************** -->
    <?php include 'layout/menu.php' ?>

    <!-- **************************Contenido ********************************** -->
    <div class="container-fluid mt-4">
        <div class="row justify-content-center container_top">


            <div class="col-11 col-md-8 col-lg-6 margen_imagen_detalle" style="margin-bottom: -1%;">
                <div class="text-center" style="height: 80%; width: 100%;object-fit: contain;">
                    <img style="object-fit: contain ;width: 100%;height: 100%;" src="<?php echo $ruta_imagen ?>" alt="" class="img-fluid-top">
                    <div class="col-12">
                    </div>
                </div>
            </div>

            <div class="col-12" style="    margin-top: -30px;">
                <div class="col-12 p-0 text-center">
                    <h3 style="color:black"><?php echo $nombre ?></h3>
                </div>
                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2" style="text-align: justify;">
                    <?php echo $noticia ?>
                </div>
                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 borde-detalle-inmueble">
                    <div class="row mb-4">
                        <div class="col-12 col-md-7">
                            Publicado el: <?php echo $fecha_complete; ?>
                        </div>
                        <div class="col-12 col-md-5">
                            <?php if ($ruta_archivo != $comparador . 'null') {
                                echo '<a style="color:black;" href="' . $ruta_archivo . '" download="Noticias.pdf"><i style="color:red;" class="fas fa-file-pdf mr-3"></i>Descargar Archivo Adjunto</a>';
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    </div>

    <!-- *****************Footer*********** -->
    <?php include 'layout/footer.php' ?>

    <!-- *******************Scripts********************* -->
    <?php include 'layout/archivosfooter.php' ?>
</body>

</html>