<?php

require_once("../model/conexao.php");
require_once("../model/bancoProduto.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(inserirProduto($conexao, $Fornecedor, $Roupa, $Tamanho, $Cor)){

    echo("dados salvos");

} 
else{
    echo("ERRO");

}


?>

