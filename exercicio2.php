<?php 

if(trim(strtolower($_GET["email"])) == "fulano@gmail.com" && trim($_GET["senha"]) == "1234Thanos") {
    echo "acertou";
} else {
    echo "dados errados";
}

?>