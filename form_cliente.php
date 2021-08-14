<?php 
require_once("header.php");
?>  
<div class="box"> 

<h1>Cadastro de clientes</h1>

<form class="row g-3" method="POST" action="../controller/adicionaCliente.php">

<div class="col-10">
    <label for="inputNome" class="form-label">Nome do Cliente</label>
    <input type="text" name="nomeCliente" class="form-control" id="inputNome" placeholder="Nome Completo">
  </div>

  <div class="col-10">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="emailCliente" class="form-control" id="inputEmail4">
  </div>

  <div class="col-4">
    <label for="Telefone" class="form-label">Telefone</label>
    <input type="text" name="foneCliente" class="form-control" id="Telefone" placeholder="(11) 9999-8787">
  </div>

  

  <div class="col-4">
    <label for="inputcpf" class="form-label">CPF</label>
    <input type="text" name="cpfCliente" class="form-control" id="inputcpf" placeholder="999.999.999-99">
  </div>
  
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>

</div>



<?php
        require_once("footer.php");
        ?>  