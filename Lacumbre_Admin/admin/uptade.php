<?php
require_once ('conexion.php');
$id=$_REQUEST["id"];
$nombre=$_REQUEST["titulo"];
$descripcion=$_REQUEST["descripcion"];
$noticia=$_REQUEST["noticia"];
$foto=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace(" ","",$foto);
$destino="fotos/".$nombre_foto;
$comparador_fotos="fotos/";

    
$nombre_ar = $_FILES['archivo']['name'];
$limite_kb = 850;
$tipo = $_FILES['archivo']['type'];
$tamanio = $_FILES['archivo']['size'];
$rutas = $_FILES['archivo']['tmp_name'];
$nombre_archivo = str_replace(" ","-",$nombre_ar);
$destinos="archivo/".$nombre_archivo;
$comparador_archivo="archivo/";
if($tamanio <= $limite_kb * 1024){
    $nombre_archivo = str_replace(" ","",$nombre_ar);
    $destinos="archivo/".$nombre_archivo; 
}else{
    echo "Archivo demaciado Grande";
}




// No actualizar ni archivos ni imagenes
if($destino == $comparador_fotos && $destinos == $comparador_archivo){
    $con1 = Conect();
     $qry1="SELECT * FROM noticias where id ='$id'";
            $sql1=mysqli_query($con1,$qry1);
            $res=  mysqli_fetch_array($sql1) ;
            
            $destino = $res[3];
    $con = Conect();
    $qry=("update noticias set nombre='$nombre', descripcion='$descripcion', noticia='$noticia' where id='$id'");
    $sql=mysqli_query($con,$qry);
        if(!$sql){
    }else{
        header("Location: lista-publicaciones.php");
    }
    
// actualizar fotos pero no archivo
}
if($destino != $comparador_fotos && $destinos == $comparador_archivo){
    copy($ruta,$destino);
    $con = Conect();
    $qry=("update noticias set nombre='$nombre', descripcion='$descripcion', imagen='$destino',noticia='$noticia' where id='$id '");
    $sql=mysqli_query($con,$qry);  

    if(!$sql){
        echo 'No se logro actualizar';
    }else{
        header("Location: lista-publicaciones.php");
    }
}
// actualizar archivo pero no imagen
if($destino == $comparador_fotos && $destinos != $comparador_archivo){
    copy($rutas,$destinos);

    $con = Conect();
    $qry=("update noticias set nombre='$nombre', descripcion='$descripcion', archivo='$destinos',noticia='$noticia' where id='$id '");
    $sql=mysqli_query($con,$qry);  

    if(!$sql){
        echo 'No se logro actualizar';
    }else{
        header("Location: lista-publicaciones.php");
    }
}
// actualizar  ambas cosas
if($destino != $comparador_fotos && $destinos != $comparador_archivo){
    copy($rutas,$destinos);
    copy($ruta,$destino);
    $con = Conect();
    $qry=("UPDATE `noticias` SET `imagen` = '$destino', `archivo` = '$destino' WHERE `noticias`.`id` = '$id'");
    $sql=mysqli_query($con,$qry);  
    if(!$sql){
        echo 'No se logro actualizar';
    }else{
        header("Location: lista-publicaciones.php");
    }
}
