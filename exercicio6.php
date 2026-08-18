<?php 
    $tipo = $_GET['genero'];
    $tamanho = $_GET['tamanho'];
    $qtd = intval($_GET['qtd']);

    if($tamanho == "p") {
        $valorTamanho = -5;
    } else if($tamanho == "m") {
        $valorTamanho = 1;
    } else {
        $valorTamanho = 10;
    }

    if($tipo == "masc") {
        $preco = 30;
    } else {
        $preco = 25;
    }

    $total = ($preco + $valorTamanho) * $qtd;

    $percentualDesconto = $qtd * 0.03;

    $valorDesconto = $total * $percentualDesconto;
    $totalFinal = $total - $valorDesconto;

    echo "Valor da camiseta: R$ " . $totalFinal;
?>