<?php
require_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/bancoCliente.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(alterarCliente($conexao, $codigoCliente, $nomeCliente, $emailCliente,$foneCliente, $cpfCliente)){
    echo("<p class='text-success'> O contato $nomeCliente foi alterado com sucesso. </p>");
}else{
    echo("<p class='text-danger'> O contato $nomeCliente não foi alterado com sucesso. </p>");
}

require_once("../view/footer.php");