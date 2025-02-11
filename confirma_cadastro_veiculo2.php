<?php
session_start();
    $vetor[0] = "active";
    include("header_inicial.php");
    include("footer.php");

    $limite = (10*1024*1024*1024);  //10MB

    $foto_usuario   = $_FILES["$foto_usuario"];

    if($foto_usuario ['type'] == "image/jpeg")
	{
        if($limite >= $foto_usuario ["size"])
        {
           
            $novoNome = sha1("foto_".date("dmYhis")).".jpg"; 

            move_uploaded_file( $foto_usuario['tmp_name'], "./enviados/".$novoNome);
            
            $conexao = new mysqli("localhost","root","", "yourtruck");

            $sql = "INSERT INTO `imagens_veiculo` (`id_imagem`, `foto_usuario`, `id_veiculo`) 
            VALUES (NULL, '$novoNome', NULL);";

            $resultado = $conexao->query($sql);
			
           if($resultado == true)
            {
                echo"<script> 
						alert('Cadastrado com sucesso');
						window.location.href = './index_motorista.php';
					</script>";
            }
            else
            {
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo '<div align="center">';
                echo "<h2>Erro ao Cadastrar!</h2>";
                echo "<br>";
                echo '<a href="cadastro_motorista.php" class="btn btn-success">Voltar</a>';
                echo '</div>';
            }
        }
    }
    
?>