<?php
session_start();
    $vetor[0] = "active";
    $vetor[1] = "";
    $vetor[2] = "";
    $vetor[3] = "";
//trocar header se for mot. or usuario
if(!isset($_SESSION["logado"]) || $_SESSION["logado"] != "S")
{
        echo"<script> 
						  window.location.href = './login.php';
					  </script>";
}

  include("header.php");
?>

<html>
<head>
    <meta charset="UTF-8" />
    <title>YourTruck</title>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="./script.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" />
  
  <style>

    .bloco
    {
      float:left !important;
      margin: 15px;
      height: 350px!important;
    }
    .fotografiaa
    {
      margin-top:10px;
      height: 225px!important; 
      width: 100%!important;
      display: block;
    }
    .containe
    {

      min-height: 500px!important;
      width: 80%!important;
      padding: 0px;
      margin-left:auto;
      margin-right:auto;
    }

  </style>
    

</head>
<body>
<main role="main">
    <div class="album py-5 bg-light">
      <div class="container">

      <div class="row">
  <?php
	$busca = "";
		if(isset($_POST['busca']))
		{
			$busca = trim($_POST['busca']);
		}
		
      if($busca == "" )
      {
        $sql = 
        "select * from veiculo
        order by destaque='S' DESC;";
      }
      else
      {
        $sql = 
        "select * from veiculo
         WHERE categoria = \"$busca\"
         order by destaque='S' DESC";
      }

        $resultado   = $conexao->query($sql);         

            
      while($linha = $resultado->fetch_object()){

        $id_motorista = $linha->id_motorista; 

        $sql2 = "select * from motorista
                 where id_motorista = $id_motorista";

                 $resultado2   = $conexao->query($sql2);
                 $linha2 = $resultado2->fetch_object();

            
        $id_veiculo = $linha->id_veiculo;
        $sql3= "select * from imagens_veiculo
                where id_veiculo = $id_veiculo";

                $resultado3   = $conexao->query($sql3);
                $linha3 = $resultado3->fetch_object();
                
                
                $cep = $linha2->cep;
                $url = "https://viacep.com.br/ws/".$cep."/json/";
                $data = file_get_contents($url);
                $resposta = json_decode($data);
                $cidade = $resposta->{'localidade'};
                $uf = $resposta->{'uf'};

                    echo
                    "<div class=\"col-md-4\">
                        <div class=\"card mb-4 shadow-sm\">
                        <img class=\"card-img-top fotografiaa\" src='./enviados/$linha3->foto_veiculo' data-holder-rendered=\"true\">
                          <div class=\"card-body\">
                           
                            <p class=\"card-text\"> <b>Nome:</b> $linha2->nome</p>
                            <p class=\"card-text\"> <b>Cidade:</b>  $cidade-$uf </p>
                            <div class=\"d-flex justify-content-between align-items-center\">
                              <div class=\"btn-group\">
                                <a href=\"perfil.php?id_veiculo=$linha->id_veiculo\" class=\"btn btn-sm btn-success\">Ver mais...</a>    
                              </div>
                              <small class=\"text-muted\">$linha2->assinatura</small>
                            </div>
                          </div>  
                        </div>
                    </div>";
            }
?> 
      
      </div>
    </div>  
  </div>
    </main>
    </body>
    </html>
    

