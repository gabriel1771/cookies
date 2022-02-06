<?php 

$data = array(
    "empresa" => "hcode Treinamentos"
);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "OK";

?>