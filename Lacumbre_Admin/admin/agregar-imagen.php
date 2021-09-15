<?php $page = "Agregar Imagen";
require("seguridad.php");
require_once("conexion.php");
include 'layout/layout.php';
?>
<div class="container d-flex" style="height:100%">
    <div class="row justify-content-center align-items-center">
        <div class="col-9">
            <h2 class="text-center mb-4">Agregar Una Imagen</h2>
            <form method="post" action="guardar-imagen.php" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Frase de la imagen</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" aria-describedby="tituloHelp" name="frase" id="frase" placeholder="Frase" required>
                        <small id="tituloHepl" class="form-text text-muted">Ingrese una frase, esta equivale al texto que esta encima de la imagen en su pagina de inicio</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Hipervinculo de la imagen</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" aria-describedby="tituloHelp" name="hipervinculo" id="hipervinculo" placeholder="Hipervinculo">
                        <small id="tituloHepl" class="form-text text-muted">Ingrese Hipervinculo, esto para redireccionar</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Imagen</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file" name="imagen" id="imagen" accept="image/*" required>
                        <small id="tituloHepl" class="form-text text-muted">Ingrese una imagen que no supere las 2MB de peso y tamaño de 900 * 360 pixeles de lo contrario puede que su pagina no se visualize corretctamente.</small>
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-8 offset-2">
                        <button type="submit" class="btn btn-dark">Guardar Imagen</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'layout/layoutFooter.php'; ?>