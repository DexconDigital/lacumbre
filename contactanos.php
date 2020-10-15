<?php require 'variables/variables.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    $page = 'Contactanos';
    require 'controllers/noticiasController.php';
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

        <section class="wow fadeInLeftBig" data-wow-duration="2s">
            <div class="container mb-4 mt-4">
                <div class="row col-md-12">
                    <div class="col-lg-6 col-md-5  contenedor_conta ">
                        <h2>Contáctanos</h2>
                        <div>
                            <nav class="nav_list">
                                <ul class="form_contac">
                                    <li><i class="fas fa-map-marker-alt icono_contac"><a class="color_a_foot_white"></i><?php echo $datos_contacto['direccion']['direccion'] ?></li></a>
                                    <li><i class="fas fa-phone icono_contac"></i><a class="color_a_foot_white" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></li></a><br>
                                    <li><i class="fas fa-mobile-alt icono_contac"></i><a class="color_a_foot_white" href="tel:<?php echo $datos_contacto['celular']['link'] ?>"><?php echo $datos_contacto['celular']['imprimir'] ?></li></a><br>
                                    <li><i class="fab fa-whatsapp icono_contac"></i><a class="color_a_foot_white" target="_blank" href="<?php echo $datos_contacto['whatsapp']['link'] ?>"><?php echo $datos_contacto['whatsapp']['imprimir'] ?></li></a><br>
                                    <li><i class="fas fa-calendar-alt icono_contac"></i><a class="color_a_foot_white"><?php echo $datos_contacto['horario']['horario'] ?></li></a>
                                    <li><i class="fab fa-instagram estilo_icono_foot color_insta"></i><a  target="_blank" class="estilo_icono_foot color_insta" href="<?php echo $redes_sociales['instagram']['link'] ?>"> Síguenos en Instagram</li></a><br>
                                </ul>
                                <div class="col-md-6 row redes_socales">
                                    <div class="col-md-3 col-3">
                                    
                                    </div>
                                    <div class="col-md-3 col-3">
                                        
                                    </div>
                                    <div class="col-md-3 col-3">
                                        
                                    </div>
                                </div>


                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7 ">
                        <img class="container_img" src="images/Logo.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="wow fadeInRightBig" data-wow-duration="2s">
            <div class="container  mapa mb-3">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 ">
                            <h2> Mapa de ubicación de la inmobiliaria</h2>
                            <div class="cot_mapa">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4649603852395!2d-75.57409468573428!3d6.202229328536636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e46828731b7e1f1%3A0xffc2990b24fd7e41!2sDavivienda!5e0!3m2!1ses-419!2sco!4v1568985916070!5m2!1ses-419!2sco" height="88%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  formulario">
                            <h2 class="titulo_formulario">Formulario de contacto</h2>
                            <form action="email/enviarCorreo.php" method="POST">
                                <div class="col-md-12 row">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <input type="text" name="nombre"class="form-control" placeholder="Nombres y Apellidos">
                                        </div>
                                    </div>
                                   <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="telefono" class="form-control" placeholder="Teléfono fijo ó celular">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="email" name="correo" class="form-control" placeholder="Correo">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea cols="25" rows="10" name="mensaje" class="textarea form-control tamaño_tex_area" placeholder="Mensaje"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12 politica">
                                    <div class="custom-control custom-checkbox mb-4">
                                        <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
                                        <label class="custom-control-label" for="defaultContactFormCopy">Confimo que he leído, entendido y acepto la<a href="Politica_de_datos.pdf" download="Politica de tratamiento de infromación.pdf"> política de tratamiento de datos personales.</a></label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn rounded-0 col-5 waves-effect waves-light" name=""><span style="color:white">Enviar</span></button>
                                    </div>
                                    <!-- Clientes@lacumbreinmobiliaria.com -->
                                </div>

                            </form>
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
</body>

</html>