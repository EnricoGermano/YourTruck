<?php
  if(isset($_POST["usuario"]))
  {
      $usuario = $_POST["usuario"];
      $senha   = $_POST["senha"];
      

      $conexao = new mysqli("localhost","root","","yourtruck");

      $sql = "select * from clientes where situacao='ativo' and email ='$usuario' ";

      $resultado = $conexao->query($sql);

      if($resultado->num_rows == 1)
      {
            $linha   = $resultado->fetch_object();
            $senhaBD = $linha->senha;
            $nome    = $linha->nome;
            $id      = $linha->id;
            $email    = $linha->email;




            if($senhaBD == ($senha))
            {

                session_start();
                $_SESSION["logado"]      = "S";
                $_SESSION["nome"]        = $nome;
                $_SESSION["id"]          = $id;
                $_SESSION["email"]       = $email;               
                $_SESSION["tipo"]        = "usuario";

                $status = "Online";
                $_SESSION['unique_id'] = $linha->id_motorista;
                  
                header("Location:index_logado.php");
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