<?php
require 'variables/variables.php';
require 'controllers/inmueblesController.php';
require 'controllers/noticiasController.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    $page = 'Inmuebles';
    include 'layout/archviosheader.php'; ?>
</head>

<body>
    <!-- definir estilo menu, true= transparente false= blanco  -->
    <script>
        var isTransparent = false;
    </script>
    <!-- ***********************Menu********************** -->
    <?php include 'layout/menu.php' ?>

    <!-- **************************Contenido ********************************** -->
    <div class="container-fluid body">

        <!-- buscador -->
        <section class="buscador wow fadeInUp" data-wow-duration="2s">
            <?php include 'layout/buscador.php'; ?>
        </section>

        <section class="inmuebles wow fadeIn" data-wow-duration="3s">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>Inmuebles</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">


                        <!-- //listar Inmuebles -->
                        <?php
                        if (is_array($r)) {
                            modelo_inmueble_listar($r['Inmuebles']);
                        } else {
                            echo '<h2 class="text-center" >No tiene Inmuebles</h2>';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <?php if (is_array($r)) : ?>
                        <ul class="pagination mt-4 align-items-end justify-content-center">
                            <?php if ($paginator->getPrevUrl()) : ?>
                                <li class="page-item"><a href="<?php echo $paginator->getPrevUrl(); ?>" class="page-link">&laquo; Atras</a></li>
                            <?php endif; ?>
                            <?php foreach ($paginator->getPages() as $page) : ?>
                                <?php if ($page['url']) : ?>
                                    <li <?php echo $page['isCurrent'] ? 'class="page-item active"' : ''; ?>>
                                        <a href="<?php echo $page['url']; ?>" class="page-link"><?php echo $page['num']; ?></a>
                                    </li>
                                <?php else : ?>
                                    <li class="page-item disabled"><span><?php echo $page['num']; ?></span></li>
                                <?php endif; ?>
                            <?php endforeach; ?>

                            <?php if ($paginator->getNextUrl()) : ?>
                                <li class="page-item"><a href="<?php echo $paginator->getNextUrl(); ?>" class="page-link">Siguiente &raquo;</a></li>
                            <?php endif; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </div>

    <!-- *****************Footer*********** -->
    <?php include 'layout/footer.php' ?>

    <!-- *******************Scripts********************* -->
    <?php include 'layout/archivosfooter.php' ?>
    <script src="conexion_api/buscador.js"></script>
</body>

</html>