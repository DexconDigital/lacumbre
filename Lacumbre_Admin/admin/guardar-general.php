<?php
require_once 'conexion.php';

$nombre=$_REQUEST["nombre"];
$tipo= $_POST["tipo"];
$foto=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace(" ","",$foto);
$destino="fotos/".$nombre_foto;
$nombre_ar =$_REQUEST["archivo"];
$fecha = date("Y-m-d");
$id_inmo = 10;


$limite_kb = 850;

$con = Conect();
    copy($ruta,$destino);
    if($nombre_ar!=""){
        mysqli_query($con, "INSERT INTO `general` (`id`, `nombre`, `tipo`, `imagen`, `archivo`, `fecha`, `id_inmobiliaria2`) VALUES (NULL, '$nombre', '$tipo', '$destino', '$nombre_ar', '$fecha', '$id_inmo')");
        header("Location: lista-general.php");
    }else{
        mysqli_query($con, "INSERT INTO `general` (`id`, `nombre`, `tipo`, `imagen`, `archivo`, `fecha`, `id_inmobiliaria2`) VALUES (NULL, '$nombre', '$tipo', '$destino', '', '$fecha', '$id_inmo')");
        header("Location: lista-general.php");
    }
?>