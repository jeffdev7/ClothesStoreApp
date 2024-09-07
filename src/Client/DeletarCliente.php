<?php 
require_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoCliente.php");
extract($_REQUEST, EXTR_OVERWRITE);

$informacoes = buscaPorCodigoCliente($conexao, $codigo);
$clienteArray = mysqli_fetch_assoc($informacoes);
?>  
<div class="box"> 

<h1>Excluir dados do cliente</h1>

<form class="row g-3" method="POST" action="../controller/DeleteClienteController.php">
<div class="col-10">
    <label for="inputNome" class="form-label">Código do Cliente</label>
    <input type="text" readonly value="<?=$clienteArray['codcli']?>" name="codigoCliente" class="form-control" id="inputNome" placeholder="Nome Completo">
  </div>

<div class="col-10">
    <label for="inputNome" class="form-label">Nome do Cliente</label>
    <input type="text" value="<?=$clienteArray['nomecli']?>" name="nomeCliente" class="form-control" id="inputNome" placeholder="Nome Completo">
  </div>

 <!--  <div class="col-10">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" value="<?=$clienteArray['emailcli']?>" name="emailCliente" class="form-control" id="inputEmail4">
  </div>

  <div class="col-4">
    <label for="Telefone" class="form-label">Telefone</label>
    <input type="text" value="<?=$clienteArray['fonecli']?>" name="foneCliente" class="form-control" id="Telefone" placeholder="(11) 9999-8787">
  </div>
 -->
  

  <div class="col-4">
    <label for="inputcpf" class="form-label">CPF</label>
    <input type="text" value="<?=$clienteArray['cpfcli']?>" name="cpfCliente" class="form-control" id="inputcpf" placeholder="999.999.999-99">
  </div>
  
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Excluir</button>
  </div>
</form>

</div>



<?php
       
    require_once("footer.php");
?>  