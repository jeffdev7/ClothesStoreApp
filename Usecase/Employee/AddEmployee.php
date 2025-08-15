<?php

require_once("../model/conexao.php");
require_once("../model/bancoFuncionario.php");
extract($_REQUEST, EXTR_OVERWRITE);

if(novoFuncionario($conexao, $funcionario, $telefone, $cargo)){
    echo("Novo funcionário cadastrado.");
}
else{
    echo("erro ao salvar novo funcionário.");
}