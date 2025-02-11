<?php
    $vetor[0] = "active";
    include("header_inicial.php");
    include("footer.php");

    $limite = (10*1024*1024*1024);  //10MB

    $foto_caminhoneiro   = $_FILES["foto_caminhoneiro"];

    if($foto_caminhoneiro ['type'] == "image/jpeg")
	{
        if($limite >= $foto_caminhoneiro ["size"])
        {
            $nome                   = $_POST["nome"];
            
            $cpf                    = $_POST["cpf"];

            $rg                     = $_POST["rg"];

            $data_nascimento        = $_POST["data_nascimento"];

            $cnh                    = $_POST["cnh"];

            $cep                    = $_POST["cep"];

            $telefone               = $_POST["telefone"];
                
            $email                  = $_POST["email"];
        
            $senha                  = $_POST["senha"];

            $categoria              = $_POST["categoria"];                    

            $novoNome = sha1("foto_".date("dmYhis")).".jpg"; 

            move_uploaded_file( $foto_caminhoneiro['tmp_name'], "./enviados/".$novoNome);
          
            $sql = "insert into motorista 
            (nome,cpf,rg,data_nascimento,cnh,cep,telefone,email,senha,categoria,foto_caminhoneiro)
            values 
            ('$nome','$cpf','$rg','$data_nascimento','$cnh','$cep','$telefone','$email','$senha','$categoria','$novoNome')";
                
                $conexao = new mysqli("localhost","root","", "yourtruck");

                $resultado = $conexao->query($sql);

                $last_id = $conexao->insert_id;
                
                session_start();
                    $_SESSION["id_motorista"] = $last_id;

           if($resultado == true)
            {
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo '<div align="center">';
                echo "<h2>Cadastado com sucesso!</h2>";
                echo"<script> 
						window.location.href = './cadastro_veiculo.php';
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
                echo "<p>NAOOOOOOOO</p>";
                echo "<script> 
                alert('Erro ao cadastrar');
                window.location.href = './cadastro_motorita.php';
            </script>";
                echo '</div>';
            }
        }
    }
    
?>