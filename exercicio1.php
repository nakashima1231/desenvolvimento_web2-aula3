<?php 
$meio = trim(strtolower($_GET["transporte"] ?? ''));

if ($meio == "carro") { 
    echo '<img src="https://super.abril.com.br/wp-content/uploads/2016/09/super_imgcarro_voador.jpg?quality=70&strip=info&w=720&h=440&crop=1" alt="">';
}

if ($meio == "van") {
    echo '<img src="https://blog.superbid.net/wp-content/uploads/2019/09/manutencao-de-van-30092019.jpg" alt="">';
}

if ($meio == "bicicleta") {
    echo '<img src="https://pbs.twimg.com/media/FvAdpqeXoAAgeQw.jpg" alt="">';
}

if ($meio == "ape") {
    echo '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbTKGYGaH5W6BHzcyPwjvKDCQnuzi4CJEya3K57iRwgWgm1QwAt2QK8S3X&s=10" alt="">';
}

if ($meio == "onibus") {
    echo '<img src="https://saude.sorocaba.sp.gov.br/wp-content/uploads/2016/01/destaque-onibus.jpg" alt="">';
}
?>




 <!-- 



    $lado1 = $_GET["lado1"];
    $lado2 = $_GET["lado2"];
    $lado3 = $_GET["lado3"];

    if($lado1 > $lado2 && $lado1 > $lado3) {
        $hip = $lado1;
        $cat1 = $lado2;
        $cat2 = $lado3;
    }  else if ($lado2 > $lado3 && $lado2 > $lado1) {
        $hip = $lado2;
        $cat1 = $lado1;
        $cat2 = $lado3;
    } else {
        $hip = $lado3;
        $cat1 = $lado2;
        $cat2 = $lado1;
    }


    if($hip**2 == $cat1**2 + $cat2**2) {
        echo "Triangulo retangulo";
    } else {
        echo "Triangulo nao retangulo";
    }




 -->