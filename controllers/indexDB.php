<?php 
require_once("conexion.php");

// Consulta Imagenes
$con = Conect();
$qry = "SELECT * FROM slide_inicio where id_inmobiliaria5 = '10'";
$sql = mysqli_query($con,$qry);