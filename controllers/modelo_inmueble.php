<?php
// modelo inmueble propiedades destacadas Recibe el array y la cantidad de inmuebles a mostrar
function modelo_inmueble_destacadas($r, $cantidad_inmuebles)
{
    // Recorrer el array la cantidad de veces que se le indique
    for ($i = 0; $i < $cantidad_inmuebles; $i++) {

        // validar si existe la imagen, si no existe colocar la imagen de no imagen
        $imagen = existeImagen(($r[$i]['foto1']));

        // Eliminar el id de la inmobiliaria
        $codigo = str_ireplace("971-", "", $r[$i]['Codigo_Inmueble']);

        // a la variable "api" le asignamos el array con la iteraccion
        $api = $r[$i];
        $precio = price_validate($api);
        // Renombrar variables
        $ciudad = $api['Ciudad'];
        $barrio = $api['Barrio'];
        $gestion = $api['Gestion'];
        $tipo_inmueble = $api['Tipo_Inmueble'];
        $alcobas = $api['Alcobas'];
        $banios = $api['banios'];
        $garaje = $api['garaje'];
        $area_construida = $api['AreaConstruida'];
        $area_privada = $api['AreaLote'];
        $administracion = $api['Administracion'];
        $canon = $api['Canon'];
        $edad_inmueble = $api['EdadInmueble'];
        $estrato = $api['Estrato'];
        $venta = $api['Venta'];
        $video360 = ($api['video360'] != "") ? '<img src="Lacumbre_Admin/admin/fotos/360_white.png" class="m-1" width="36px" />' : "";
        $fondo = ($video360 != "") ? "icono_inmuble_video" : "";
        echo
            '
            <div class="col-lg-4 col-md-6 col-12 mb-3">
            <div class="card ancho-card">
            <a href="./detalle_inmueble.php?co=' . $codigo . '">
                <img src="' . $imagen . '" class="prmedio" alt="...">
                </a>
                <span class="'. $fondo .' d-flex justify-content-center align-items-center">
                    ' . $video360 . '
                </span>
                <span class="icono_inmuble"></span>
                <span class="precio_inmueble">' . $precio . '</span>
                <div class="card-body">
                    <div class="col-md-12 row">
                        <div class="col-md-12">
                            <p class="mb-1">
                                <b>' . $tipo_inmueble . ' en ' . $gestion . '</b>
                            </p>
                        </div>
                        <div class="col-md-12">
                            <p class="mb-1">
                                <i class="fas fa-map-marker-alt mr-2">
                                    ' . $barrio . ', ' . $ciudad . '
                                </i>
                            </p>
                        </div>

                        <div class="col-md-12">
                            <p class="mb-1">
                                <b>' . $codigo . '</b>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-12 row ">

                        <ul class="info_inmueble mt-3">
                            <li class="container_li">
                                <i class="fas fa-chart-area icono_inmueble mr-1"></i>
                                ' . $area_construida . 'm<sup>2</sup>
                            </li>
                            <li class="container_li">
                                <i class="fas fa-bath icono_inmueble mr-1"></i>
                                ' . $banios . '
                            </li>
                            <li class="container_li">
                                <i class="fa fa-bed icono_inmueble mr-1"></i>
                                ' . $alcobas . '
                            </li>
                            <li class="container_li">
                                <i class="fa fa-car icono_inmueble mr-1"></i>
                                ' . $garaje . '
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
            ';
    }
}


function modelo_inmueble_listar($r)
{
    // Recorrer el array la cantidad de veces que se le indique
    for ($i = 0; $i < count($r); $i++) {

        // validar si existe la imagen, si no existe colocar la imagen de no imagen
        $imagen = existeImagen(($r[$i]['foto1']));

        // Eliminar el id de la inmobiliaria
        $codigo = str_ireplace("971-", "", $r[$i]['Codigo_Inmueble']);

        // a la variable "api" le asignamos el array con la iteraccion
        $api = $r[$i];
        $precio = price_validate($api);
        // Renombrar variables
        $ciudad = $api['Ciudad'];
        $barrio = $api['Barrio'];
        $gestion = $api['Gestion'];
        $tipo_inmueble = $api['Tipo_Inmueble'];
        $alcobas = $api['Alcobas'];
        $banios = $api['banios'];
        $garaje = $api['garaje'];
        $area_construida = $api['AreaConstruida'];
        $area_privada = $api['AreaLote'];
        $administracion = $api['Administracion'];
        $canon = $api['Canon'];
        $edad_inmueble = $api['EdadInmueble'];
        $estrato = $api['Estrato'];
        $venta = $api['Venta'];
        $video360 = ($api['video360'] != "") ? '<img src="Lacumbre_Admin/admin/fotos/360_white.png" class="m-1" width="36px" />' : "";
        $fondo = ($video360 != "") ? "icono_inmuble_video" : "";
        echo
            '<div class="col-lg-4 col-md-6 col-12 ">
             <div class="card mb-4" style="">
                <a href="detalle_inmueble.php?co='.$codigo.'">
                    <img src="' . $imagen . '" class="prmedio" alt="...">
                </a>
                <span class="'. $fondo .' d-flex justify-content-center align-items-center">
                    ' . $video360 . '
                </span>
                <span class="precio_inmueble">' . $precio . '</span>
                <div class="card-body">
                    <div class="col-md-12 row">
                        <div class="col-md-12">
                            <p class="mb-1">
                                <b>' . $tipo_inmueble . ' en ' . $gestion . '</b>
                            </p>
                        </div>
                        <div class="col-md-12">
                            <p class="mb-1">
                                <i class="fas fa-map-marker-alt mr-2">
                                    ' . $barrio . ', ' . $ciudad . '
                                </i>
                            </p>
                        </div>

                        <div class="col-md-12">
                            <p class="mb-1">
                                <b>Codigo: ' . $codigo . '</b>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-12 row ">
                        <ul class="info_inmueble mt-3">
                            <li class="container_li">
                                <i class="fas fa-chart-area icono_inmueble mr-1"></i>
                                ' . $area_construida . 'm<sup>2</sup>
                            </li>
                            <li class="container_li">
                                <i class="fas fa-bath icono_inmueble mr-1"></i>
                                ' . $banios . '
                            </li>
                            <li class="container_li">
                                <i class="fa fa-bed icono_inmueble mr-1"></i>
                                ' . $alcobas . '
                            </li>
                            <li class="container_li">
                                <i class="fa fa-car icono_inmueble mr-1"></i>
                                ' . $garaje . '
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
            ';
    }
}


function modelo_inmueble_similares($r)
{
    for ($i = 0; $i < count($r); $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("971-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];
        $precio = price_validate($api);
        // Renombrar variables
        $ciudad = $api['Ciudad'];
        $barrio = $api['Barrio'];
        $gestion = $api['Gestion'];
        $tipo_inmueble = $api['Tipo_Inmueble'];
        echo '
        <div class="item mb-4">
        <div class="card" style="">
          <div class="property">
            <a href="detalle_inmueble.php?co=' . $codigo . '">
              <div class="property-image">
                <img class="alto_img" alt="" src="' . $imagen . '"></div>
              <div class="precio">
                
              </div>
              <div class="overlay">
               
              </div>
            </a>
          </div>
        <div class=" row col-12 margen_card">
        <div class="col-12">
          <p class="mb-1"><b>' . $api['Tipo_Inmueble'] . ' en ' . $api['Gestion'] . '</b></p>
        </div>
        <div class="col-12">
          <p class="mb-1"><i class="fas fa-map-marker-alt mr-2"></i>' . $api['Barrio'] . ', ' . $api['Ciudad'] . '</p>
        </div>
        <hr>
        <div class="col-12">
          <p class="mb-1"> <small>
              Código:' . $codigo . '
            </small>
          </p>
        </div>
      </div>
    </div>

  </div>
           ';
    }
}

// Funciones para los modelos de propiedades
function existeImagen($r)
{
    if ($r == "") {
        $r = "images/no_image.png";
    }
    return $r;
}

function price_validate($r)
{
    $precio = '';
    if ($r['Gestion'] == 'Arriendo') {
        $precio =  '$' . $r['Canon'];
    } else if ($r['Gestion'] == 'Venta') {
        $precio = '$' . $r['Venta'];
    } else {
        $precio = '$' . $r['Canon'] . '/ $' . $r['Venta'];
    }
    return $precio;
}


function console_log($output, $with_script_tags = true)
{
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . ');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}
