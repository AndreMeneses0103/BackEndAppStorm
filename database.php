<?php

$host = "localhost";
$user = "root";
$password = '';
$database = "db_colaboradores";

$conexao = mysqli_connect($host, $user, $password, $database);

if(!$conexao){
    die("Erro: ". mysqli_connect_errno());
}

?>