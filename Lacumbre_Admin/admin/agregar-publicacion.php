<?php $page = "Agregar Noticia";
require("seguridad.php");
require_once("conexion.php");
include 'layout/layout.php';
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
        <div class="col-9" style="    margin-top: 27px;">
            <h2 style="margin-bottom: 35px;" class="text-center">Agregar Publicación</h2>
            <form method="POST" action="guardar.php" enctype="multipart/form-data">
            
               <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Título Publicación</label>
                    <div class="col-sm-10">
                <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título Noticia"  required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Descripción Corta</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripción Corta" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Publicación:</label>
                    <div class="col-sm-10">
                        <textarea name="noticia" id="noticia"></textarea>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Imagen</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file" name="imagen" id="imagen" accept="image/*">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Archivo</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file" name="archivo" id="archivo" accept="application/pdf">
                    </div>
                </div>

                <input type="hidden" id="fecha" name="fecha">
                <div class="form-group row">
                    <div class="col-8 offset-2 conct_botton">
                        <button class="btn color_boton" value="crear">Crear Publicación</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'layout/layoutFooter.php'; ?>