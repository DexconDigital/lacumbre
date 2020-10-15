<?php

require_once("conexion.php");

$link = Conect();
$array = array();

$sql = "SELECT * FROM noticias  where id_inmobiliaria2 = 10 order by id desc";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));
while ($field = mysqli_fetch_array($result)) {
    $nombre = $field['nombre'];
    $id = $field['id'];
    $descripcion = $field['descripcion'];
    $imagen = $field['imagen'];
    $noticia = $field['noticia'];
    $fecha = $field['fecha'];
    $archivo = $field['archivo'];
    $noticias_array[] = array(
        'titulo' => $nombre,
        'id' => $id,
        'descripcion' => $descripcion,
        'imagen' => 'Lacumbre_Admin/admin/'.$imagen,
        'noticia' => $noticia,
        'fecha' => $fecha,
        'archivo' => $archivo
    );
}
function modelo_ultima_noticia($r)
{      
    if(count($r) > 2){
        $cantidad_noticias = 3;
    }else{
        $cantidad_noticias = count($r);
    }
    for($i=0; $i<$cantidad_noticias; $i++){
       $limite_de_cadena = 100;
       echo'
    <div class="col-md-12 media mt-3">
         <img src="'.$r[$i]['imagen'].'" class="align-self-center mr-3 ultima_noticia" alt="..." width="68" height="auto">
       <div class="media-body">
           <h5 class="mt-0 color_blanco">' . $r[$i]['titulo'] .'</h5>
           <p class="color_blanco">' . $r[$i]['descripcion'] . '</p>
       </div>
   </div>
   
        ';
    }
}


function modelo_noticia($r)
{
    for ($i = 0; $i < count($r); $i++) {
        echo '
        <div class="col-md-6 col-lg-4 col-12 mb-3">
       <div class="card">
       <img style="object-fit: cover;width: 100%;height: 255px;" src="'.$r[$i]['imagen'].'" class="card-img-top" alt="..."> 
           <div class="card-body">
               <h5 class="card-title">' . $r[$i]['titulo'] .'</h5>
               <p class="card-text">' . $r[$i]['fecha'] .'</p>
               <p class="card-text">' . $r[$i]['descripcion'] . '</p>
               <a href="./detalle-noticia.php?co=' . $r[$i]['id'] . '" class="btn boton_color rounded-0">Ver más</a>
           </div>
       </div>
   </div>
    ';
    }
}
