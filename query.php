<?php

include "database.php";

$comando = intval($_REQUEST["s"]);
$texto = $_REQUEST["t"];

$selectnm = "SELECT * FROM tbl_produtos where nome = '" . $texto . "'";
$selectref = "SELECT * FROM tbl_produtos where referencia = '" . $texto . "'";
$selectall = "SELECT * FROM tbl_produtos";

if($comando === 0){
     $query = mysqli_query($conexao, $selectall);
}elseif($comando === 1){
     $query = mysqli_query($conexao, $selectref);
}elseif($comando === 2){
     $query = mysqli_query($conexao, $selectnm);
}

$dados = array();
while($column = mysqli_fetch_assoc($query)){
     $dados[] = $column;
}

echo json_encode($dados);   
?>