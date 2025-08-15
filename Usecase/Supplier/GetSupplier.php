<?php

function buscaTudoFornecedor($conexao) {
    $query = "select * from tbfornecedor";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}