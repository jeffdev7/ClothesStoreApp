<?php
 require_once("../shared/header.php");
# require_once("../model/conexao.php");
 ?>

<div class="box">
<h1>Funcionários</h1>

<form class="row g-3" method="POST" action="../controller/addFuncionario.php">

<div class="col-8">
    <label for="funcionario" class="form-label">Nome</label>
    <input type="text" name="funcionario" class="form-control" id="inputFuncionario" placeholder="">
  </div>

  <div class="col-6">
    <label for="Telefone" class="form-label">Telefone</label>
    <input type="text" name="telefone" class="form-control" id="inputTelefone" placeholder="">
  </div>
    
  <div class="col-8">
    <label for="cargo" class="form-label">Cargo</label>
    <input type="text" name="cargo" class="form-control" id="inputCargo" placeholder="">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>

</div>
</div>
<?php
  require_once("../shared/footer.php");
?>  