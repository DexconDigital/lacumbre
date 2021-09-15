<?php
require_once ( 'conexion.php' );

$id = $_REQUEST["id"];
$hipervinculo = $_REQUEST["hipervinculo"];
$frase = $_REQUEST["frase"];
$foto = $_FILES["imagen"]["name"];
$ruta = $_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace( " ", "", $foto );
$destino = "fotos/".$nombre_foto;
$id_inmo = 10;
$comparador_fotos = "fotos/";
copy( $ruta, $destino );
if ( $comparador_fotos != $destino ) {
    $con = Conect();
    $qry = ( "UPDATE `slide_inicio` SET `ruta_imagen` = '$destino', `hipervinculo` = '$hipervinculo', `texto-banner` = '$frase' WHERE `slide_inicio`.`id` = $id" );
    $sql = mysqli_query($con, $qry);
    if ( !$sql ) {
        echo 'No se logro actualizar';
    } else {
        header( "Location: lista-imagenes.php" );
    }
} else {
    $con = Conect();
    $qry = ( "UPDATE `slide_inicio` SET `hipervinculo` = '$hipervinculo', `texto-banner` = '$frase' WHERE `slide_inicio`.`id` = $id" );
    $sql = mysqli_query($con, $qry);
    if ( !$sql ) {
        echo 'No se logro actualizar';
    } else {
        header( "Location: lista-imagenes.php" );
    }
}
?>