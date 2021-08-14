<?php
session_start();
include_once("../model/conexao.php");
include_once("../model/bancoCliente.php");
extract($_REQUEST, EXTR_OVERWRITE);

buscaPorNome($conexao, $nomeCliente) 
