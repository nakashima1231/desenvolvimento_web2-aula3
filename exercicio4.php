<?php
    $email = $_GET["email"];

    echo "Seu email: " . $email . "<br>";

    if(!isset($_GET["noticia"]) && !isset($_GET["promocao"])) {
        echo "Assinatura cancelada.";
    }

    if(isset($_GET["noticia"])) {
        echo "Voce recebera noticias no email. <br>";
        }
        
    if(isset($_GET["promocao"])) {
        echo "Voce recebera promocoes no email.";
    }


?>