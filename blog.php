<?php require 'variables/variables.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    $page = 'Blog';
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
    <div class="container-fluid body cont_blog">
        <section class=" wow fadeInDownBig" data-wow-duration="2s">
            <div class="container mt-4">
                <div class="col-md-12">
                    <div class="row">
                        <?php if (isset($noticias_array)) {
                            modelo_noticia($noticias_array);
                        } else {
                            echo '<div class="col 12">
                        <h3 class="text-center">Muy pronto publicaremos contenido para ti<h3>
                        </div>';
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
</body>

</html>