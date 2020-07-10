<?php

if(isset($_POST['enviar'])){
    if(!empty($_POST['name'])){
        $destinatario = $_POST['email'];
    }else{
        $destinatario = 'nicofierro1@gmail.com';
    }
    if(!empty($_POST['name'])){
        $asunto = $_POST['name'];
        $asunto .= " te ha enviado un mensaje desde tu web";
    }else{
        $asunto = "Prueba";
    }
    if(!empty($_POST['comment'])){
        $cuerpo = "
        <html>
        <head>
         <title>Envio de mail</title>
        </head>
        <body>
        <h1>Mensaje:</h1>
        <p>
            $_POST['comment']
        </p>
        </body>
        </html>
        ";
    }else{
        
        $cuerpo = "
        <html>
        <head>
         <title>Envio de mail</title>
        </head>
        <body>
        <h1>Mensaje:</h1>
        <p>
        Esto es un mensaje de prueba
        </p>
        </body>
        </html>
        ";
    }
    // Para enviar un correo HTML
    //debe establecerse la cabecera Content-type 
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859- 1\r\n";
    //dirección del remitente concatenada con
    //otras direcciones
    $headers .= "From: NF
    <nicofierro1@gmail.com>\r\n";
    //dirección de respuesta distinta que la del
    //remitente
    $headers .= "Reply-To:
    ss@ss.com\r\n";
    $mail = mail($destinatario,$asunto,$cuerpo,$headers);
    if(mail){
        echo '<h4>Mensaje enviado exitosamente!</h4>';
    }else{
        echo '<h4>No se pudo enviar el mensaje</h4>';
    }
}

?>