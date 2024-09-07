<?php

function inserirProduto($conexao, $codfornFK, $nmprod, $tamprod, $corprod){
    $query = "insert into tbproduto( codfornFK, nmprod, tamprod, corprod)values ('{$codfornFK}', '{$nmprod}', '{$tamprod}', '{$corprod}')";
    $inserir = mysqli_query($conexao, $query);
    return $inserir;
}