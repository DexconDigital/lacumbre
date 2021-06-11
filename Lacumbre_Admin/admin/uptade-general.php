<?php
require_once ('conexion.php');
$id=$_REQUEST["id"];
$nombre=$_REQUEST["nombre"];
$tipo=$_REQUEST["tipo"];
$foto=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace(" ","",$foto);
$destino="fotos/".$nombre_foto;
$comparador_fotos="fotos/";
$nombre_ar = $_REQUEST['archivo'];


// No actualizar ni archivos ni imagenes
if($destino == $comparador_fotos){
    $con1 = Conect();
     $qry1="SELECT * FROM noticias where id ='$id'";
            $sql1=mysqli_query($con1,$qry1);
            $res=  mysqli_fetch_array($sql1) ;
            
            $destino = $res[3];
    $con = Conect();
    $qry=("update general set nombre='$nombre', tipo='$tipo', archivo='$nombre_ar' where id='$id'");
    $sql=mysqli_query($con,$qry);
        if(!$sql){
    }else{
        header("Location: lista-general.php");
    }
// actualizar fotos pero no archivo
}

if($foto != ""){
    copy($ruta,$destino);
    $con = Conect();
    $qry=("update general set nombre='$nombre', tipo='$tipo', imagen='$destino',archivo='$nombre_ar' where id='$id '");
    $sql=mysqli_query($con,$qry);  

    if(!$sql){
        echo 'No se logro actualizar';
    }else{
        header("Location: lista-general.php");
    }
}

