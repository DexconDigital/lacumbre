<?php $page = "Agregar Noticia";
require("seguridad.php");
require_once("conexion.php");
include 'layout/layout.php';
$user = $_SESSION["usuarioactual"];
$con = Conect();
$qry = "SELECT * FROM `usuarios` WHERE id_user = '$user'";
$sql = mysqli_query($con, $qry);
$usuario =  mysqli_fetch_array($sql);
?>

<style>
    input[type]:focus {
        border-color: #A01127;
         !important;
        box-shadow: 0 1px 1px rgba(229, 103, 23, 0.075)inset, 0 0 8px #A01127;
         !important;
        outline: 0 none;
    }

    .color_boton {
        background-color: #A01127;
        color: white;

    }

    .color_boton:hover {
        color: white;
    }

    .color_cancelar {
        background-color: #201815;
        color: white;
    }

    .color_cancelar:hover {
        color: white;
    }

    .conct_botton {
        text-align: center;

    }
    .container{
        background-color: white;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9" style=" margin-top: 27px;">
            <h2 style=" margin-bottom: 35px;" class="text-center">Perfil</h2>
            <form class="form-horizontal" method="post" action="updateperfil.php" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $usuario[0]; ?>">
                <input type="hidden" name="usuario" value="<?php echo $usuario[1]; ?>">
                <div class="form-group row">
                    <label for="disabledinput" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="pass" id="pass" value="<?php echo $usuario[2]; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="disabledinput" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $usuario[3]; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="disabledinput" class="col-sm-2 control-label">Teléfono</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $usuario[4]; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="disabledinput" class="col-sm-2 control-label">Cargo</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="cargo" id="cargo" value="<?php echo $usuario[5]; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="disabledinput" class="col-sm-2 control-label">Dependencia</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="dependencia" id="dependencia" value="<?php echo $usuario[6]; ?>" required>
                    </div>
                </div>
                <div class="bs-example" data-example-id="form-validation-states">
                    <div class="form-group row">
                        <label for="noticia" class="col-sm-2 control-label">Imagen Perfil Actual</label>
                        <div class="col-sm-8">
                            <img width="70px" height="" src="<?php echo $usuario[7]; ?>">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label class="col-2 control-label" for="noticia">Subir Nueva Imagen</label>
                        <div class="col-8">
                            <input type="file" name="imagen" id="imagen">
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-8 offset-2 conct_botton">
                                <button class="btn color_boton">Actualizar Perfil</button>
                                <a href="index.php" class="btn color_cancelar">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include 'layout/layoutFooter.php'; ?>