<?php $page = "Lista de Noticias";
require("seguridad.php");
require_once("conexion.php");
include 'layout/layout.php';
$id=$_GET["id"];
            $con=Conect();
            $qry="SELECT * FROM general where id ='$id' and id_inmobiliaria2 = 10";
            $sql=mysqli_query($con,$qry);
            $res=  mysqli_fetch_array($sql) ; 
?>
<style>
.color_boton{
    background-color: #A01127;
    color: white;
    
}
.color_boton:hover{
    color: white;
}
.conct_botton{
    text-align: center;
    
}
.container{
    background-color: white;
}
input[type]:focus{
    border-color: #A01127; !important;
    box-shadow: 0 1px 1px rgba(229, 103, 23, 0.075)inset, 0 0 8px #A01127; !important;
    outline: 0 none;
    }

</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9" style=" margin-top: 27px;">
            <h2 class="text-center">Editar publicación</h2>
            <form method="post" action="uptade-general.php" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="<?php echo $res[0]; ?>">
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Titulo Noticia</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo $res[1]; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tipo de Publicación</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="tipo" id="tipo" placeholder="tipo" required>
                            <option value="">--Seleccionar--</option>
                            <option value="youtube" <?php echo ($res[2] == "youtube") ? "selected" : ""; ?>>Youtube</option>
                            <option value="panorama" <?php echo ($res[2] == "panorama") ? "selected" : ""; ?>>Panorama 3D</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Imagen Actual</label>
                    <div class="col-sm-10">
                        <img src="<?php echo $res[3]; ?>" alt="" width="200px" height="auto">
                    </div>
                    <div class="col-sm-10 offset-2">
                        <input type="file" class="form-control-file" name="imagen" id="imagen" accept="image/*">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="archivo" id="archivo" placeholder="Ponga el url de youtube ó panorama 3D" value="<?php echo $res[4]; ?>">
                    </div>
                </div>

                <input type="hidden" id="fecha" name="fecha">
                <div class="form-group row">
                    <div class="col-8 offset-2 conct_botton">
                        <button class="btn color_boton">Actualizar Noticia</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'layout/layoutFooter.php'; ?>