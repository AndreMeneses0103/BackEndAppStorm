<?php

$cep = $_REQUEST['num'];

$resposta = file_get_contents("https://viacep.com.br/ws/".$cep."/json");

echo json_encode($resposta);

?>