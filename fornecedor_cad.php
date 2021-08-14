<?php
 require_once("header.php");
 require_once("../model/conexao.php");
 ?>

<div class="box">
<h1>Cadastro de fornecedores</h1>

<form class="row g-3" method="POST" action="../controller/addFornecedor.php">

<div class="col-8">
    <label for="fornecedor" class="form-label">Fornecedor</label>
    <input type="text" name="fornecedor" class="form-control" id="inputFornecedor" placeholder="">
  </div>

  <div class="col-6">
    <label for="Telefone" class="form-label">Telefone</label>
    <input type="text" name="telefone" class="form-control" id="inputTelefone" placeholder="">
  </div>
  
  <div class="col-8">
    <label for="celular" class="form-label">Celular</label>
    <input type="text" name="celular" class="form-control" id="inputCelular" placeholder="">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>

</div>
</div>
<?php
  require_once("footer.php");
?>  