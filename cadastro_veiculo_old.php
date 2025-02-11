<?php
 $vetor[0] = "active";
 $vetor[1] = "";
 $vetor[2] = "";
 $vetor[3] = "";
 include("header_inicial.php");
 include("footer.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastro</title>
  <meta charset="utf-8">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="estilo.css" rel="stylesheet"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $("#placa").mask("AAA-0000");
      });
    
      $(document).ready(function(){
      $("#telefone").mask("00-000000000");
      });
</script>
<style>
.label 
{
}
#foto {
  background-color:;
 
}
.foto:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.file
{
  text-align: center;
}
.container
{
  border: 1px;
}


</style>
</head>
<body>

<div class="container p-3 my-3 border">
  <br>
  <h2>Faça o Cadastro do veiculo para prosseguir!</h2>

  <form action="./confirma_cadastro_veiculo.php" method="post" enctype="multipart/form-data">
    <br>
  <div class="form-group">
      <label for="placa">Placa do veiculo:</label>
      <input type="txt" class="form-control " id="placa" placeholder="insira sua placa" name="placa" required>
    </div>
    <div class="form-group">
      <label for="modelo">Modelo do veiculo:</label>
      <input type="txt" class="form-control" id="modelo" placeholder="insira o modelo do veiculo" name="modelo" required>
    </div>
      
      <div class="form-group">
      <label for="ano">Ano de fabricação:</label>
      <input type="txt" class="form-control" id="ano" placeholder="insira o ano do veiculo" name="ano" required>
    </div>
 
    <div class="form-group">
    <label for="cor">Cor do Veiculo</label>
      <input type="txt" class="form-control" id="cor" placeholder= "insira a cor do veiculo" name="cor" required>
    </div>

    <div class="form-group">
      <label for="telefone">Celular:</label>
      <input type="txt" class="form-control" id="telefone" placeholder="insira seu telefone" name="telefone" required>
    </div>

      <div class="form-group">
      <label for="capacidade">Capacidade maxima do veiculo em Kg:</label>
      <input type="txt" class="form-control" id="capacidade" placeholder="capacidade do veiculo em Kg" name="capacidade" required>
    </div>
    
    <label for="categoria">Escolha uma categoria de mudança:</label>
  <select name="categoria" id="categoria">
      <option value="frete">Frete</option>
      <option value="trasporte">Transporte</option>
      <option value="entrega">Entrega</option>
    </select>
      
   <br>
      <div class="form-group">
      <label for="foto_caminhão">foto do veiculo:</label>
      <input type="file" class="form-control" id="foto" placeholder="foto do caminhão" name="foto_caminhão" required>
    </div>

    
    <br>
    <br>
    <div align="center">
    <button type="submit" class="btn btn-danger">Cadastrar</button>
    </div>
  </form>
</div>
    <br>
    <br>
    <br>
    <br>
 
</body>
</html>