<?php

require_once("../model/conexao.php");
require_once("../model/bancoCadFornecedor.php");
extract($_REQUEST, EXTR_OVERWRITE);

if(novoFornecedor($conexao, $fornecedor, $telefone, $celular)){
    echo("Novo fornecedor cadastrado.");
}
else{
    echo("erro ao salvar novo fornecedor.");
}