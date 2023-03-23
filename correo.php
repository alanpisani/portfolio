<?php

if (isset($_POST['enviar'])) {
    if(!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['mensaje']) && !empty($_POST['asunto'])){
        
        $name=$_POST['nombre'];
        $email=$_POST['correo'];
        $asunto=$_POST['asunto'];
        $msj=$_POST['mensaje'];
        $header= "From: noreply@example.com" . "\r\n";
        $header.="Reply-To: noreply@example.com" . "\r\n";
        $header.="X-Mailer: PHP/". phpversion();
        $mail=@mail($email,$asunto,$msj,$header);
        
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
else{
    echo "<h4>vacio</h4> "; 
}







