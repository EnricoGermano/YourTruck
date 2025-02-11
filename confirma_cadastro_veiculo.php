<?php
session_start();
    $vetor[0] = "active";
    include("header_inicial.php");
    include("footer.php");

    $limite = (10*1024*1024*1024);  //10MB

    $foto_veiculo   = $_FILES["foto_veiculo"];

    if($foto_veiculo ['type'] == "image/jpeg")
	{
        if($limite >= $foto_veiculo ["size"])
        {
            $placa                   = $_POST["placa"];
            
            $capacidade              = $_POST["capacidade"];

            $modelo                  = $_POST["modelo"];

            $ano                     = $_POST["ano"];

            $cor                     = $_POST["cor"];

            $categoria               = $_POST["categoria"];         
            
            $id_motorista            = $_SESSION["id_motorista"];

            $novoNome = sha1("foto_".date("dmYhis")).".jpg"; 

            move_uploaded_file( $foto_veiculo['tmp_name'], "./enviados/".$novoNome);
            
            $conexao = new mysqli("localhost","root","", "yourtruck");
          
            $sql = "insert into veiculo (placa,capacidade,modelo,ano,cor,categoria,id_motorista)
        
            values ('$placa','$capacidade','$modelo','$ano','$cor','$categoria','$id_motorista')";

                $resultado = $conexao->query($sql);

                $last_id = $conexao->insert_id;

                $_SESSION["id_veiculo"] = $last_id;

              $id_veiculo             = $_SESSION["id_veiculo"];
          
            $sql2 = "INSERT INTO `imagens_veiculo` (`id_imagem`, `foto_veiculo`, `id_veiculo`) 
            VALUES (NULL, '$novoNome', '$id_veiculo');";

                $resultado2 = $conexao->query($sql2);
			
           if($resultado == true)
            {
                echo"<script> 
						alert('Cadastrado com sucesso');
						window.location.href = './login.php';
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