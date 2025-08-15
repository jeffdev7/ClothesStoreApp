<?php

require_once("../../Settings/Connection.php");
require_once("../model/bancoFuncionario.php");
extract($_REQUEST, EXTR_OVERWRITE);

function Execute() : void
{
    if(novoFuncionario($conexao, $funcionario, $telefone, $cargo))
        echo("Novo funcionário cadastrado.");
    else
        echo("erro ao salvar novo funcionário.");
}

// <?php
// function saveEmployee(): void {
//     // Example: get form values
//     $firstName = $_POST['firstName'] ?? '';
//     $lastName  = $_POST['lastName'] ?? '';

//     // TODO: validate & save to database here
//     echo "Saving employee: {$firstName} {$lastName}";
// }

// // Call the function when the form is submitted
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     saveEmployee();
// }
