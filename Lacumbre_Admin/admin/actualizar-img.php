<?php $page = "Actualizar imagen";
require( "seguridad.php" );
require_once( "conexion.php" );
include 'layout/layout.php';
$id = (isset($_GET["id"])) ? $_GET["id"] : 0;
$con = Conect();
$qry = "SELECT * FROM slide_inicio where id ='$id' and id_inmobiliaria5 = 10";
$sql=mysqli_query($con,$qry);
$res=  mysqli_fetch_array($sql) ; 
?>
<div class="container d-flex" style="height:100%">
    <div class="row justify-content-center align-items-center">
        <div class="col-9">
            <h2 class="text-center mb-4">Editar Una Imagen</h2>
            <form method="post" action="uptade_img.php" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id" value="<?php echo $res[0]; ?>">
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Frase de la imagen</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" aria-describedby="tituloHelp" name="frase" id="frase " placeholder="Frase" value="<?php echo $res[3]; ?>" required>
                        <small id="tituloHepl" class="form-text text-muted">Ingrese una frase, esta equivale al texto que esta encima de la imagen en su pagina de inicio</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Hipervinculo de la imagen</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" aria-describedby="tituloHelp" name="hipervinculo" id="hipervinculo" placeholder="Hipervinculo" value="<?php echo $res[2]; ?>">
                        <small id="tituloHepl" class="form-text text-muted">Ingrese Hipervinculo, esto para redireccionar</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Imagen Actual</label>
                    <div class="col-sm-10">
                        <img src="<?php echo $res[1]; ?>" alt="" width="200px" height="auto">
                    </div>
                    <div class="col-sm-10 offset-2">
                        <input type="file" class="form-control-file" name="imagen" id="imagen" accept="image/*">
                        <small id="tituloHepl" class="form-text text-muted">Ingrese una imagen que no supere las 2MB de peso y tamaño de 900 * 360 pixeles de lo contrario puede que su pagina no se visualize corretctamente.</small>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-8 offset-2">
                        <button type="submit" class="btn btn-dark">Actualizar Imagen</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'layout/layoutFooter.php';
?>
