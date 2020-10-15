
     <?php
        require_once("conexion.php");
        $id = $_GET["id"];
        $con = Conect();
        $consulta = "SELECT * FROM noticias WHERE id = '$id'";
        $result = mysqli_query($con, $consulta) or die(mysqli_error($con));
        while ($field = mysqli_fetch_array($result)) {
            $imagen = $field['imagen'];
            $archivo = $field['archivo'];            
        }
        unlink($archivo);
        unlink($imagen);

        $qry = "DELETE FROM noticias WHERE id ='$id'  ";
        $sql = mysqli_query($con, $qry);

        if (!$sql) {
            echo 'No se logro realizar la peticion';
        } else {
            header("Location: lista-publicaciones.php");
        }
        ?>
    
    
