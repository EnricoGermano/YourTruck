<?php
  if(isset($_POST["usuario"]))
  {
      $usuario = $_POST["usuario"];
      $senha   = $_POST["senha"];

      $conexao = new mysqli("localhost","root","","yourtruck");

      $sql = "select * from adm where situacao='ativo' and email ='$usuario' ";

      $resultado = $conexao->query($sql);

      if($resultado->num_rows == 1)
      {
            $linha   = $resultado->fetch_object();
            $senhaBD = $linha->senha;
            $nome    = $linha->nome;
        

            if($senhaBD == ($senha))
            {

                session_start();
                $_SESSION["logado"] = "S";
                $_SESSION["nome"]   = $nome;
      
                header("Location:https://www.caccto.com.br/alunos/login.php");
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