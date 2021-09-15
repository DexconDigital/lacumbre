<?php
require_once 'conexion.php';

$nombre = $_REQUEST["titulo"];
$frase = $_REQUEST["frase"];
$hipervinculo = $_REQUEST["hipervinculo"];
$foto = $_FILES["imagen"]["name"];
$ruta = $_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace( " ", "", $foto );
$destino = "fotos/".$nombre_foto;
$id_inmo = 10;

$con = Conect();
copy( $ruta, $destino );

$qry = ( "INSERT INTO `slide_inicio` (`ruta_imagen`, `hipervinculo`, `texto-banner`, `id_inmobiliaria5`) VALUES ('$destino', '$hipervinculo', '$frase', '$id_inmo')" );
$sql = mysqli_query( $con, $qry );

header( "Location: lista-imagenes.php" );
?>