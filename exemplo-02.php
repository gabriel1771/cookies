<?php

if(isset($_COOKIE["NOME_DO_COOKIE"])){
    $data = json_decode($_COOKIE["NOME_DO_COOKIE"], true);

var_dump($data);
}



?>