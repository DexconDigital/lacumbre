<?php

require_once( "conexion.php" );

$link = Conect();
$array = array();

$sql = "SELECT * FROM general  where id_inmobiliaria2 = 10 order by id desc";
$result = mysqli_query( $link, $sql ) or die( mysqli_error( $link ) );
while ( $field = mysqli_fetch_array( $result ) ) {
    $nombre = $field['nombre'];
    $id = $field['id'];
    $tipo = $field['tipo'];
    $imagen = $field['imagen'];
    $fecha = $field['fecha'];
    $archivo = $field['archivo'];
    $general_array[] = array(
        'nombre' => $nombre,
        'id' => $id,
        'tipo' => $tipo,
        'imagen' => 'Lacumbre_Admin/admin/'.$imagen,
        'fecha' => $fecha,
        'archivo' => $archivo
    );
}

function modelo_youtube( $r ) {
    for ( $i = 0; $i < count( $r ); $i++ ) {
        if ( $r[$i]['tipo'] == "youtube" ) {
            echo '
                <div class="card ancho-card">
                    <a href="' . $r[$i]['archivo'] .'" class="light-link">
                        <img src="'.$r[$i]['imagen'].'" class="card-img-top" alt="..." style="height:10rem;object-fit:fill;" alt="...">
                    </a>
                    <div class="card-body  border-0 text-center">
                    '. $r[$i]['nombre'] .'
                    </div>
                </div>';
        }
    }
}

function modelo_panorama( $r ) {
    for ( $i = 0; $i < count( $r ); $i++ ) {
        if ( $r[$i]['tipo'] == "panorama" ) {
            $marca = ($r[$i]['imagen'] != "Lacumbre_Admin/admin/fotos/360.png") ? '<img src="Lacumbre_Admin/admin/fotos/360_white.png" style="position:absolute;height:9rem;object-fit: scale-down;filter:drop-shadow(1px 1px 2px black);">' : "";
            echo '
                <div class="card ancho-card" style="height:15rem;">
                    <a href="' . $r[$i]['archivo'] .'" type="button" data-toggle="modal" data-target="#tresd'. $r[$i]['id'] .'" class="d-flex justify-content-center align-items-center">
                        <img src="'.$r[$i]['imagen'].'" class="card-img-top" alt="..." style="height:10rem;object-fit: scale-down;">
                        ' . $marca . '
                    </a>
                    <div class="card-body text-center">
                        '.$r[$i]['nombre'].'
                    </div>
                </div>';
        }
    }
}

function modelo_panorama_modales( $r ) {
    for ( $i = 0; $i < count( $r ); $i++ ) {
        if ( $r[$i]['tipo'] == "panorama" ) {
            //modal
            echo '<!-- Modal 3d 1-->
                    <div class="modal fade" id="tresd'. $r[$i]['id'] .'" tabindex="-1" aria-labelledby="Modal3d'. $r[$i]['id'] .'" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="Modal3d'. $r[$i]['id'] .'">'. $r[$i]['nombre'] .'</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="'. $r[$i]['archivo'] .'" class="w-100" style="height:40rem"></iframe>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>';
        }
    }
}
