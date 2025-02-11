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
  <title>Cadastro de Motorista</title>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $("#cpf").mask("000.000.000-00");
      });
      $(document).ready(function(){
      $("#rg").mask("00 000 000-0");
      });
      $(document).ready(function(){
      $("#cnh").mask("00000000000");
      });
      $(document).ready(function(){
      $("#cep").mask("00000-000");
      });
      $(document).ready(function(){
      $("#telefone").mask("00-000000000");
      });
</script>
</head>
<body>

<div class="container p-3 my-3 border">
  <br>
  <h2>Faça seu Cadastro para poder entrar no site</h2>
  <br>
<form action="./confirmacadastro_motorista.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="txt"  class="form-control" id="nome" placeholder="insira seu nome completo" name="nome" required>
    </div>

    <div class="form-group">
      <label for="cpf">CPF:</label>
      <input type="txt" class="form-control cpf-mask" id="cpf" placeholder="ex: 000.000.000-00" name="cpf" required>
    </div>

    <div class="form-group">
      <label for="rg">RG:</label>
      <input type="txt" class="form-control" id="rg" placeholder="insira seu rg" name="rg" required>
    </div>

    <div class="form-group">
      <label for="data">Data de nascimento:</label>
      <input type="date" class="form-control" id="data_nascimento" placeholder= "insira sua data de nascimento" name="data_nascimento" required>
    </div>

    <div class="form-group">
      <label for="cnh">CNH:</label>
      <input type="txt" class="form-control" id="cnh" placeholder="insira seu cnh" name="cnh" required>
    </div>

    <div class="form-group">
      <label for="cep">CEP:</label>
      <input type="txt" class="form-control" id="cep" placeholder="insira seu cep" name="cep" required>
    </div>

    <div class="form-group">
      <label for="telefone">Celular:</label>
      <input type="txt" class="form-control" id="telefone" placeholder="insira seu telefone" name="telefone" required>
    </div>

  <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="insira o email" name="email" required>
    </div>

    <div class="form-group">
      <label for="senha">Senha:</label>
      <input type="password" class="form-control" id="senha" placeholder="insira sua senha" name="senha" required>
    </div>
      
      <div class="form-group">
      <label for="Foto">Foto Do Usuario:</label>
      <input type="file" class="form-control" id="foto" placeholder="" name="foto_usuario" required>
    </div>
  <br>
  <label for="categoria">Escolha uma categoria de mudança:</label>
  <select name="categoria" id="categoria">
      <option value="frete">Frete</option>
      <option value="trasporte">Transporte</option>
      <option value="entrega">Entrega</option>
    </select>
    <br><br>
    <div align="center">
    <button type="submit" class="btn btn-danger">Cadastrar</button>
    </div>
  <br>
  <br>
  <br>
  <br>
  <br>
</form>
</div>


</body>
</html>