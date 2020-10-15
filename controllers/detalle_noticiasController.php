<?php
    require_once('controllers/conexion.php');
    $codigo = 0;
    $codigo = $_GET['co'];

    $link = Conect();

    $sql = "SELECT * FROM noticias WHERE id = $codigo";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    while ($field = mysqli_fetch_array($result)) {
        $nombre = $field['nombre'];
        $id = $field['id'];
        $descripcion = $field['descripcion'];
        $imagen = $field['imagen'];
        $archivo = $field['archivo'];
        $noticia = $field['noticia'];
        $fecha_complete = $field['fecha'];
    }
    $comparador='./Lacumbre_Admin/admin/';
    $ruta_imagen='./Lacumbre_Admin/admin/'.$imagen;
    $ruta_archivo= $comparador.$archivo;

?>