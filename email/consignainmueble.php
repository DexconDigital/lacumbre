<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_POST) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $transaccion = $_POST['transaccion'];
    $inmueble = $_POST['tipo_inm'];
    $valor = $_POST['valor'];
    $area = $_POST['area'];
    $ciudad = $_POST['ciudad'];
    $direccion = $_POST['direccion'];
    $mensaje = $_POST['mensaje'];
}
$mail = new PHPMailer(true);

try{
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;

    $mail->Username = 'masivoinmobiliarias@gmail.com';
    $mail->Password = 'dexcon2019@';

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    // Mensaje para enviar
    
    $mail->isHTML(true);
    $mail->setFrom('inmobiliaria@lacumbre.com', 'inmobiliaria@lacumbre.com');
    $mail->addAddress('usualy9898@gmail.com');
    /*$mail->addAddress('jhonnypalacio@lacumbreinmobiliaria.com');*/

    $mail->Subject='Mensaje desde la pagina web La Cumbre - Consignar Inmueble';
    $mail->Body = '<h4>Hola, '.$nombre.' quiere recibir información sobre como consignar un inmueble</h4>
                    <ul>
                        <li>Correo: '.$email.'</li>
                        <li>Telefono: '.$telefono.'</li>
                        <li>Ciudad: '.$ciudad.'</li>
                        <li>Quiere consignar su inmueble en: '.$transaccion.'</li>
                        <li>Tipo de inmueble: '.$inmueble.'</li>
                        <li>Valor: '.$valor.'</li>
                        <li>Área: '.$area.'</li>
                        <li>Mensaje: '.$mensaje.'</li>
                    </ul>
    ';
    $mail->send();
    echo "<script>window.location.href='index.php';</script>";

}catch(Exception $e){
	echo 'algo salio mal' , $e->getMessage();
}
?>