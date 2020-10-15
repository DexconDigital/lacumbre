<?php $page = "Agregar Noticia";
require("seguridad.php");
require_once("conexion.php");
require_once('id_inmobiliaria/inmobiliaria.php');
include 'layout/layout.php';
            $con=Conect();
            $qry="SELECT * FROM estadisticas where id ='$id_inmobiliaria'";
            $sql=mysqli_query($con,$qry);
            $res=  mysqli_fetch_array($sql) ; 
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">
            <h2 class="text-center">Estadisticas</h2>
            <form method="post" action="uptade_estadisticas.php" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="<?php echo $res[0]?>">
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Numero de Clientes</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="clientes" id="clientes" value="<?php echo $res[1]?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Propiedades en Venta</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="venta" id="venta" value="<?php echo $res[2]?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Propiedades en Arriendo</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="arriendo" id="arriendo" value="<?php echo $res[3]?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Experiencia</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="experiencia" id="experiencia" value="<?php echo $res[4]?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-8 offset-2">
                        <button class="btn btn-dark">guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include 'layout/layoutFooter.php'; ?>