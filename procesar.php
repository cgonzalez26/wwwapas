<?php
    //echo "Vamos a procesar el formulario <br>";

    //print_r($_POST);
    $nombre = $_POST['nombre'];
    
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    //echo "<br>";
    /*echo $nombre;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $mensaje;*/

    $to = "crisgonzalez26@gmail.com";
    $email_subject = "Nuevo mensaje: de la web";
    $email_body = "El nombre es".$nombre."<br>El mail es ". $email . "<br>El mensaje ".$mensaje;
    $headers = "From: $email";
    //echo $email_body;
    mail($to, $email_subject, $email_body, $headers);

    //envio de mail PHPMailer
    echo "Gracias por contactarse.";
?>