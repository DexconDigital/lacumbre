<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require '../vendor/autoload.php';

if ($_POST) {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
        
}


$mail = new PHPMailer(true);

try{
    
    // Mensaje para enviar
     $mail->isSMTP();

    $mail->Host = 'mail.lacumbreinmobiliaria.com';
    $mail->SMTPAuth = true;
    //acceso
    $mail->Username = 'web10@lacumbreinmobiliaria.com';
    $mail->Password = 'lacumbre10';

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    
    
    
 
   
//SMTP_SERVER: smtpout.secureserver.net (or alternatively relay-hosting.secureserver.net) SMTP_PORT: 465 //or 3535 or 80 or 25 SMTP_AUTH: true //always SMTP_Secure: 'ssl' //only if using port 465 



    // Mensaje para enviar
    
    $mail->isHTML(true);
    //Cabecera
    $mail->setFrom('web@lacumbreinmobiliaria.com','web@lacumbreinmobiliaria.com');
    //destinos
    /*$mail->addAddress('Clientes@lacumbreinmobiliaria.com');*/
    $mail->addAddress('usualy9898@gmail.com');
    
    $mail->Subject='Inmobiliaria La Cumbre';
    $mail->Body = '<span>Buen día, '.$nombre.' quiere contactarse con ustedes y sus datos son: </span>
                    <ul>
                        <li>Correo: '.$email.'</li>
                        <li>Telefono: '.$telefono.'</li>
                        <li>Mensaje: '.$mensaje.'</li>
                    </ul>
    ';
    $mail->send();
    echo "<script>window.location.href='../.'</script>";

}catch(Exception $e){
    echo 'algo salio mal' , $e->getMessage();
}
