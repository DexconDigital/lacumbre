<?php
require_once ('conexion.php');

$id=1;
$clientes=$_REQUEST["clientes"];
$venta=$_REQUEST["venta"];
$arriendo=$_REQUEST["arriendo"];
$experiencia=$_REQUEST["experiencia"];

    $con1 = Conect();
     $qry1="SELECT * FROM estadisticas where id ='$id'";
            $sql1=mysqli_query($con1,$qry1);
            $res=  mysqli_fetch_array($sql1) ;
    $con = Conect();
    $qry=("update estadisticas set clientes='$clientes', p_venta='$venta', p_arriendo='$arriendo',experiencia='$experiencia' where id='$id '");
    $sql=mysqli_query($con,$qry);
        if(!$sql){
        echo 'No se logro actualizar';
    }else{
        header("Location: estadisticas.php");
    }

?>