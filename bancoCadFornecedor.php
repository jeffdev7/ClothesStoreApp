<?php
session_start();
require_once("../model/conexao.php");

function novoFornecedor($conexao, $nomeFornecedor, $foneFornecedor, $celularFornecedor){
    $query = "insert into tbfornecedor (nomeforn, foneforn, contforn)values ('{$nomeFornecedor}', '{$foneFornecedor}', '{$celularFornecedor}')";

return mysqli_query ($conexao, $query);
}