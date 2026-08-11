<?php 
    $tipo = $_GET["genero"];
    $tamanho = $_GET["tamanho"];

    if($tamanho == "p") {
        $desconto = -5;
    } else if($tamanho == "m") {
        $desconto = 1;
    } else {
        $desconto = 10;
    }

    if($tipo == "masc") {
        $desconto += 30;      
        } else {
        $desconto += 25;      
    }

    echo "Valor da camiseta: R$" . $desconto;
?>