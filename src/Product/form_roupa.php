    <?php 
      require_once("header.php");
      require_once("../model/conexao.php");
      require_once("../model/bancoFornecedor.php");
      
     

      $fornecedor = buscaTudoFornecedor($conexao);
            
    ?>

<div class="box"> 

<h1>Cadastro de Produtos</h1>

<form class="row g-3" method="POST" action="../controller/adicionarRoupa.php">

<div class="col-8">
    <label for="nomeRoupa" class="form-label">Vestuário</label>
    <input type="text" name="Roupa" class="form-control" id="inputRoupa" placeholder="">
  </div>


      <div class="col-4">
  <label for="nomeFornecedor" class="form-label">Fornecedor</label>
  <select class="form-select" name="Fornecedor" id="fornecedor" aria-label="Default select example">
  <option selected>Escolha o fornecedor</option>

  <?php 
  foreach($fornecedor as $fornecedores) :
    ?>

  

  <option value="<?=$fornecedores['codforn']?>"><?=$fornecedores['nomeforn']?></option>

  <?php
  endforeach;
  ?>


</select>
      </div>

      
      <div class="col-4">
  <label for="nomeTamanho" class="form-label">Tamanho</label>
  <select class="form-select" name="Tamanho" id="tamanho" aria-label="Default select example">
  <option selected>Escolha o tamanhor</option>
  <option value="P">P</option>
  <option value="M">M</option>
  <option value="G">G</option>

</select>
      </div>

      <div class="col-4">
  <label for="nomeCor" class="form-label">Cor</label>
  <select class="form-select" id="cor" name="Cor" aria-label="Default select example">
  <option selected>Escolha a cor</option>
  <option value="Branco">Branco</option>
  <option value="Preto">Preto</option>
  <option value="Azul">Azul</option>
  <option value="Verde">Verde</option>
  <option value="Vermelho">Vermelho</option>
  <option value="Rosa">Rosa</option>
</select>
      </div>
  
  
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>

</div>

<?php
  require_once("footer.php");
?>  