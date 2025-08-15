<?php
session_start();
require_once("../model/conexao.php");

function novoFuncionario($conexao, $nomeFuncionario, $foneFuncionario, $cargoFuncionario){
    $query = "insert into tbfuncionario (nomefun, fonefun, cargofun)values ('{$nomeFuncionario}', '{$foneFuncionario}', '{$cargoFuncionario}')";

return mysqli_query ($conexao, $query);
}