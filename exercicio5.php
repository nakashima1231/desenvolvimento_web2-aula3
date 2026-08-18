<?php 
    $texto = $_GET['texto'];
    $cor = $_GET['cor'];
    $corF = $_GET['corFundo'];

    echo '<h1 style="color:' . $cor . '; background-color:' . $corF . ';">' . $texto . '</h1>';
?>