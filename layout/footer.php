<i class="fas fa-angle-double-up subir"></i>

<footer class="color_footer" id="footer">
    <div class="container">
        <div class="col-12 justify-content-center">
            <div class="row">
                <div class="col-md-4 col-12 col-lg-4 mb-3">
                    <h3 class="title-footer">Contáctanos</h3>
                    <p class="text-justify">La Cumbre Inmobiliaria cuenta con un equipo de ejecutivos capacitados y dispuestos a prestar un servicio integral y de calidad, buscando la forma de satisfacer las necesidades de sus clientes, asesorando y respondiendo todas sus inquietudes a la hora de comprar y arrendar.</p>
                    <p class=""><i class="fas fa-map-marker-alt mr-1 color_rojo mr-2"></i><?php echo $datos_contacto['direccion']['direccion'] ?></p>
                    <p class=""><a class="" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><i class="fas fa-phone-alt mr-1 color_rojo mr-2"></i><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></a></p>
                    <p class=""><a class="" href="mailto:<?php echo $datos_contacto['correo']['correo'] ?>"><i class="far fa-envelope mr-1 color_rojo mr-2"></i><?php echo $datos_contacto['correo']['correo'] ?></a></p>
                    <p class=""><a target="_blank" class="" href="<?php echo $redes_sociales['instagram']['link'] ?>"><i class="fab fa-instagram mr-1 color_rojo mr-2"></i>Síguenos en Instagram</a></p>
                    <p class=""><a target="_blank" class="" href="<?php echo $datos_contacto['whatsapp']['link'] ?>"><i class="fab fa-whatsapp mr-1 color_rojo mr-2"></i><?php echo $datos_contacto['whatsapp']['imprimir'] ?></a></p>

                </div>
                <div class="col-md-4 col-12 col-lg-4 mb-2">
                    <h3 class="title-footer">Últimas Noticias</h3>
                    <?php if (isset($noticias_array)) {
                        modelo_ultima_noticia($noticias_array);
                    } else {
                        echo '<div class="col 12">
                        <p class="text-justify">Muy pronto publicaremos contenido nuevo para ti.<p>
                        </div>';
                    } ?>

                </div>

                <div class="col-md-4 col-12 col-lg-4">
                    <h3 class="title-footer"> Formularios aseguradoras</h3>
                    <ul class="menu">
                        <li class="menu-item"><a download="Libertador Persona Jurídica.pdf" class="option_foot" href="<?php echo $formularios_aseguradoras[0]['ruta'] ?>"><?php echo $formularios_aseguradoras[0]['nombre'] ?></a></li>
                        <li class="menu-item"><a download="Libertador Persona Natural.pdf" class="option_foot" href="<?php echo $formularios_aseguradoras[1]['ruta'] ?>"><?php echo $formularios_aseguradoras[1]['nombre'] ?></a></li>
                        <li class="menu-item"><a download="Unifianza Persona Jurídica.pdf" class="option_foot" href="<?php echo $formularios_aseguradoras[2]['ruta'] ?>"><?php echo $formularios_aseguradoras[2]['nombre'] ?></a></li>
                        <li class="menu-item"><a download="Unifianza Persona Natural.pdf" class="option_foot" href="<?php echo $formularios_aseguradoras[3]['ruta'] ?>"><?php echo $formularios_aseguradoras[3]['nombre'] ?></a></li>
                        <li class="menu-item"><a download="Sura Persona Jurídica.pdf" class="option_foot" href="<?php echo $formularios_aseguradoras[4]['ruta'] ?>"><?php echo $formularios_aseguradoras[4]['nombre'] ?></a></li>
                        <li class="menu-item"><a download="Sura Persona Natural.pdf" class="option_foot" href="<?php echo $formularios_aseguradoras[5]['ruta'] ?>"><?php echo $formularios_aseguradoras[5]['nombre'] ?></a></li>
                        <li class="menu-item"><a download="Sura Codeudor Persona Natural y Jurídica.pdf" class="option_foot" href="<?php echo $formularios_aseguradoras[6]['ruta'] ?>"><?php echo $formularios_aseguradoras[6]['nombre'] ?></a></li>
                    </ul>
                </div>
                <!-- <div class="col-3">
                <h4 class=""> Ubícanos</h4>
                <div class="col-md-12 contenedor_mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4649603852395!2d-75.57409468573428!3d6.202229328536636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e46828731b7e1f1%3A0xffc2990b24fd7e41!2sDavivienda!5e0!3m2!1ses-419!2sco!4v1568985916070!5m2!1ses-419!2sco"  height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <div class= " mt-3 mb-4">
                    <a href="https://www.google.com/maps/search/Carrera+43A+%23+1+sur+188+Medell%C3%ADn/@6.202224,-75.571906,17z" name="submitNewsletter" target="_blank" class="btn rounded-0 col-md-12 waves-effect waves-light btn_mapa" name=""><span class="tamaño_botton">Como llegar</span></a>
                </div>
            </div> -->
            </div>
        </div>

    </div>

    <div class="footer-bottom-area">
        <div class="container border-top text-center pt-4 pb-1">
            <p class="conte_copy">Copyright © 2019 <a class="" href="https://www.dexcondigital.com">Dexcon Digital.</a> Todos los derechos reservados.</p>
        </div>
    </div>
</footer>

<section>
    <div class="modal fade show" id="consigna" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Consignar Inmueble</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="modal-body">
                        <form action="email/consignainmueble.php" class="row" method="POST">
                            <div class="form-group col-12">
                                <input type="text" placeholder="Nombre" name="nombre" class="form-control" requiered>
                            </div>
                            <div class="form-group col-12">
                                <input type="mail" placeholder="Correo" name="email" class="form-control" required>
                            </div>
                            <div class="form-group col-12">
                                <input type="Telefono" placeholder="Teléfono" name="telefono" class="form-control" requiered>
                            </div>
                            <div class="form-group col-12">
                                <select class="form-control select_color" name="transaccion" requiered>
                                    <option selected="" disabled="">Tipo de Transacción</option>
                                    <option value="arriendo">Arriendo</option>
                                    <option value="arriendo/venta">Arriendo/venta</option>
                                    <option value="venta">Venta</option>
                                    <option value="avaluos">avalúos</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <select class="form-control select_color" id="tipo_inm" name="tipo_inm" requiered>
                                    <option selected="" disabled="">Tipo de Inmueble</option>
                                    <option value="Apartamento">Apartamento</option>
                                    <option value="Casa">Casa</option>
                                    <option value="Consultorio">Consultorio</option>
                                    <option value="Oficina">Oficina</option>
                                    <option value="Local">Local</option>
                                    <option value="Bodega">Bodega</option>
                                    <option value="Lote">Lote</option>
                                    <option value="Finca">Finca</option>
                                    <option value="Parqueadero">Parqueadero</option>
                                    <option value="Edificio">Edificio</option>
                                    <option value="Apartaestudio">Apartaestudio</option>
                                    <option value="Hotel">Hotel</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <input type="number" placeholder="Valor" name="valor" class="form-control" requiered>
                            </div>
                            <div class="form-group col-12">
                                <input type="number" placeholder="Área" name="area" class="form-control" requiered>
                            </div>
                            <div class="form-group col-12">
                                <input type="text" placeholder="Ciudad" name="ciudad" class="form-control" requiered>
                            </div>
                            <div class="form-group col-12">
                                <input type="text" placeholder="Dirección" name="direccion" class="form-control" requiered>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="mensaje" placeholder="Mensajes" class="form-control" id="mensaje" rows="6" requiered></textarea>
                            </div>
                            <div class="form-group col-12">
                                <div class="form-check">
                                    <input type="checkbox" requiered class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Acepto <a class="politicas_contac color_negro" href="Politica_de_datos.pdf" class="a-terminos" target="blank">la política y tratamiento de datos</a></label>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <button type="submit" class="btn  btn-sm btn-block color_negro_back">Enviar</button>
                            </div>
                        </form>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn color_gris" data-dismiss="modal">Cancelar</button>
                    <!-- jhonnypalacio@lacumbreinmobiliaria.com -->

                </div>
            </div>
        </div>
    </div>
</section>