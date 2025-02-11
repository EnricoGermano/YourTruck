<?php
    $vetor[0] = "active";
   include("header.php");
    $limite = (10*1024*1024*1024);  //10MB

    $foto_usuario   = $_FILES["foto_usuario"];

    if($foto_usuario ['type'] == "image/jpeg")
	{
        if($limite >= $foto_usuario ["size"])
        {
            $novoNome = sha1("foto_".date("dmYhis")).".jpg"; 
                
            $email                  = $_POST["email"];
        
            $senha                  = $_POST["senha"];

            $nome                   = $_POST["nome"];

            $cpf                    = $_POST["cpf"];

            $cep                    = $_POST["cep"];

            $telefone               = $_POST["telefone"];

            $data_nascimento        = $_POST["data_nascimento"];

            $ran_id = rand(time(), 100000000);

            move_uploaded_file( $foto_usuario['tmp_name'], "./enviados/".$novoNome); 
          
            $sql = "insert into clientes (nome,email,senha,cpf,cep,foto_usuario,data_nascimento,telefone,unique_id)
        
            values ('$nome','$email','$senha','$cpf','$cep','$novoNome','$data_nascimento','$telefone','$ran_id')";

            $conexao = new mysqli("localhost","root","", "yourtruck");           

            $resultado = $conexao->query($sql);

            if($resultado)
            {
            
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo '<div align="center">';
                echo "<h2>Cadastado com sucesso!</h2>";
                echo "<br>";                
                echo '<a href="login.php" class="btn btn-success">Voltar</a>';
                echo"<script> 
                     window.location.href = './index_logado.php';
                     </script>";
                echo '</div>';
            }
                else
                {
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    echo '<div align="center">';
                    echo "<h2>Erro ao Cadastrar!</h2>";
                    echo "<br>";
                    echo '<a href="cadastro_cliente.php" class="btn btn-success">Voltar</a>';
                    echo '</div>';
                }
        }

}
?>