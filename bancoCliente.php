<?php
session_start();
require_once("../model/conexao.php");

function inserirCliente($conexao, $nomeCliente, $emailCliente, $foneCliente, $cpfCliente){
    $query = "insert into tbcliente (nomecli, emailcli, fonecli, cpfcli)values ('{$nomeCliente}', '{$emailCliente}', '{$foneCliente}', '{$cpfCliente}')";

return mysqli_query ($conexao, $query);
}

function buscaPorNome($conexao, $nomeCliente){
    $query = "select * from tbcliente where nomecli like '%{$nomeCliente}%'";
    $result = mysqli_query($conexao, $query);
    return $result;
}

function buscaPorCodigoCliente($conexao, $codigoCliente){
    $query = "select * from tbcliente where codcli = '{$codigoCliente}'";
    $result = mysqli_query($conexao, $query);
    return $result;
}

function alterarCliente($conexao, $codigoCliente, $nomeCliente, $emailCliente,$foneCliente, $cpfCliente){
    $query = "update tbcliente set nomecli= '{$nomeCliente}', emailcli='{$emailCliente}', fonecli='{$foneCliente}', cpfcli ='{$cpfCliente}' where codcli = '{$codigoCliente}'";

    $result = mysqli_query($conexao, $query);
    return $result;
}

function deletarCliente($conexao, $codigoCliente){
    $query = "delete from tbcliente where codcli = '{$codigoCliente}'";
    $result = mysqli_query($conexao, $query);
    return $result;

}

?>