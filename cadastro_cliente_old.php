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
      $("#cpf").mask("000.000.000-00");
      });
      $(document).ready(function(){
      $("#cep").mask("00000-000");
      });
</script>
<style>

#foto {
  background-color: #1e90ff;
 
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
  <h2>Faça seu Cadastro para poder entrar no site</h2>

  <form action="./confirmacadastro_cliente.php" method="post" enctype="multipart/form-data">
    <br>
  <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control " id="email" placeholder="insira o email" name="email" required>
    </div>
    <div class="form-group">
      <label for="senha">Senha:</label>
      <input type="password" class="form-control" id="senha" placeholder="insira sua senha" name="senha" required>
    </div>
      
      <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="txt" class="form-control" id="nome" placeholder="insira seu nome completo" name="nome" required>
    </div>
 
    <div class="form-group">
    <label for="data">Data de nascimento:</label>
      <input type="date" required = "true" class="form-control" id="data_nascimento" placeholder= "insira sua data de nascimento" name="data_nascimento" required>
    </div>

    <div class="form-group">
      <label for="telefone">Telefone:</label>
      <input type="txt" class="form-control" id="telefone" placeholder="insira seu telefone" name="telefone" required>
    </div>

      <div class="form-group">
      <label for="cpf">CPF:</label>
      <input type="txt" class="form-control cpf-mask" id="cpf" placeholder="ex: 000.000.000-00" name="cpf" required>
    </div>

      <div class="form-group">
      <label for="cep">CEP:</label>
      <input type="txt" class="form-control" id="cep" placeholder="ex: 00000-000" name="cep" required>
    </div>
   <br>
      <div class="form-group">
      <label for="Foto">Foto Do Usuario:</label>
      <input type="file" class="form-control" id="foto" placeholder="" name="foto_usuario" required>
    </div>
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