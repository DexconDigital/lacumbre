<?php
$user = $_SESSION["usuarioactual"];
$con = Conect();
$qry = "SELECT * FROM usuarios where id_user ='$user'";
$sql = mysqli_query($con, $qry);
$usuario =  mysqli_fetch_array($sql);
$imagen_inicio = $usuario["imagen"];

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $page ?></title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/sb-admin.css">
    <link rel="stylesheet" href="../../css/all.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../../css/all.min.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="../css/style_admin.css">
    <script src="tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            height: 300,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor textcolor colorpicker'
            ],
            language: 'es_MX',
            toolbar: 'undo redo cut copy paste selectall |  fontsizeselect | bold italic underline forecolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | print link',
            fontsize_formats: '8pt 10pt 12pt 13pt 14pt 16pt 18pt 20pt 22pt 24pt 26pt 28pt 30pt 32pt 34pt 36pt 42pt'
        });
    </script>
    <style type="text/css">
        #register_form fieldset:not(:first-of-type) {
            display: none;
        }

        .color_ul {
            background-color: #201815;
        }

        .color_nv {
            background-color: #201815;
        }

        .colo_ico {
            color: white;
        }

        .colo_ico2 {
            color: white;
        }
        #page-top {
            background-image: url('images/fondo.png');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<!--
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" style="width:150px;" href="index.php">
            <img src="<?php echo $imagen_inicio ?>" class="img-fluid">
        </a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>
    -->
<!-- Navbar -->
<!-- Agregar icono de logout en este espacio -->
<!--
    </nav>
    
    <div id="wrapper">-->
<!-- Sidebar -->
<!--
        <ul class="sidebar navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Inicio</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./agregar-publicacion.php">
                    <i class="fas fa-plus-square"></i>
                    <span> Nueva Publicación</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lista-publicaciones.php">
                    <i class="fas fa-list-ol"></i>
                    <span>Ver Publicaciones</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="perfil.php">
                    <i class="fas fa-tools"></i>
                    <span>Configuración</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../salir.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Cerrar sesión</span></a>
            </li>
        </ul>
    
        <div id="content-wrapper" style="background:#c8cfda21;">
    -->

<body>

    <nav class="navbar navbar-expand static-top color_nv">
        <div style="width: 14%;">
            <a class="navbar-brand mr-1" href="index.php"><img style="object-fit: contain;width: 100%;height: 100%;" src="images/Logo_Blanco.png" alt=""></a>
        </div>


        <!-- Navbar Search -->
        <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        </div>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">


            <li class="nav-item active ">
                <a class="nav-link" href="../salir.php">
                    <i class="fas fa-sign-out-alt colo_ico2"></i>
                    <span class="colo_ico2">Salir</span>
                </a>

            </li>
        </ul>
    </nav>

    <div id="wrapper">

        <ul class="sidebar navbar-nav color_ul">

            <li>
                <div class="">
                    <a class="navbar-brand mr-1 text-center" style="width:150px;" href="index.php">
                        <img src="<?php echo $imagen_inicio ?>" class="img-fluid">
                    </a>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-home colo_ico"></i>
                    <span>Inicio</span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link " href="./agregar-publicacion.php">
                    <i class="far fa-file colo_ico"></i>
                    <span>Nueva noticia</span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="lista-publicaciones.php">
                    <i class="fas fa-eye colo_ico"></i>
                    <span>Ver noticias</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link " href="./agregar-general.php">
                    <i class="far fa-file colo_ico"></i>
                    <span>Nueva Publicación</span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="lista-general.php">
                    <i class="fas fa-eye colo_ico"></i>
                    <span>Ver Publicaciones</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="agregar-imagen.php">
                    <i class="fas fa-image"></i>
                    <span>Agregar Imagenes</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lista-imagenes.php">
                    <i class="far fa-images"></i>
                    <span>Ver Imagenes</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="perfil.php">
                    <i class="fas fa-wrench colo_ico"></i>
                    <span>Configuación</span></a>
            </li>
        </ul>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Page level plugin JavaScript-->