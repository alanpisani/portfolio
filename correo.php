<?php

if (isset($_POST['enviar'])) {
    if(!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['mensaje']) && !empty($_POST['asunto'])){
        
        $name=$_POST['nombre'];
        $emailMio="alanpisani1993@gmail.com";
        $email=$_POST['correo'];
        $asunto=$_POST['asunto'];
        $msj=$_POST['mensaje'];
        $header= "From: $email" . "\r\n";
        $header.="Reply-To: $email" . "\r\n";
        $header.="X-Mailer: PHP/". phpversion();
        $mail=@mail($emailMio,$asunto,$msj,$header);
        
        if($mail){
            echo "<h4>mail enviado exitosamente </h4>";
        }else{
            echo "<h4>error</h4> ";
            echo "<h4>$name</h4> ";
            echo "<h4>$email</h4> ";
            echo "<h4>$asunto</h4> ";
            echo "<h4>$msj</h4> ";
        }
    }
}