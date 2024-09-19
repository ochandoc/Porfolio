<?php

if (isset($_POST['submit'])) {
    if ( !empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $destino = "jfochando@gmail.com";
        $asunto = "Mensaje de $name";
        
        $contenido = "Nombre: $name \r\n";
        $contenido .= "Email: $email \r\n";
        $contenido .= "Mensage: $message";
        
        $header = "From: noreplay@hectorochando.com" . "\r\n";        

        $mail = mail($destino, $asunto, $contenido, $header);
        
        if ($mail) {
            echo "<h4>Mail enviado correctamente</h4>";
            header('Location:index.html');
        } else {
            echo "<h4>Hubo un error</h4>";
            header('Location:index.html');
        }
    }
}
