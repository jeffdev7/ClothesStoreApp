<?php

require_once("../model/conexao.php");
require_once("../model/bancoCliente.php");
extract($_REQUEST, EXTR_OVERWRITE);

if(inserirCliente($conexao, $nomeCliente, $emailCliente, $foneCliente, $cpfCliente)){

    echo("As informações do cliente foram salvas.");
}
else{
    echo("As informações não foram salvas.");

}


?>