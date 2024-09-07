<?php
require_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/bancoCliente.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(deletarCliente($conexao, $codigoCliente)){
    echo("<p class='text-danger'> O contato $nomeCliente foi excluído com sucesso. </p>");
}else{
    echo("<p class='text-danger'> O contato $nomeCliente não foi excluído com sucesso. </p>");
}

require_once("../view/footer.php");