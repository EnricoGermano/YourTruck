<?php
  session_start();
  if(isset($_POST["usuario"]))
  {
      $usuario = $_POST["usuario"];
      $senha   = $_POST["senha"];

      $conexao = new mysqli("localhost","root","","yourtruck");

      $sql = "select * from motorista where situacao='ativo' and email ='$usuario' ";

        $resultado = $conexao->query($sql);

      if($resultado->num_rows == 1)
        {
          $linha = $resultado->fetch_object();
          $senhaBD = $linha->senha;
          $nome    = $linha->nome;
          $id      = $linha->id_motorista;

        if($senhaBD == ($senha))
        {
            $sql_veiculo = "select * from veiculo where id_motorista ='$id' ";

            $resultado_veiculo = $conexao->query($sql_veiculo);

            $linha_veiculo = $resultado_veiculo ->fetch_object();
            $id_veiculo      = $linha_veiculo->id_veiculo;
   
              $_SESSION["logado"]         = "S";
              $_SESSION["nome"]           = $nome;
              $_SESSION["id"]             = $id;
              $_SESSION["id_veiculo"]     = $id_veiculo;
              $_SESSION["tipo"]           = "motorista";
              $status = "Online";
              $_SESSION['unique_id'] = $linha->id_motorista;

              echo"<script> 
              window.location.href = './index_motorista.php';
              </script>";
        }
          else
          {
            include("msg_erro.php");
          }
      }
      else
      {
          include("msg_erro.php");
      }



  }

      ?>
