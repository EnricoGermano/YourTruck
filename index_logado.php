<?php
    session_start();
    $vetor[0] = "active";
    include("header.php");
    include("footer.php");
?>

<html>

<head>
    <title>YourTruck</title>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="./script.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" />

</head>
<style>

.carousel-inner img 
    {
        width: 100%;
        height: 100%;
        margin: 0 auto;
    }
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

<body>
    <div class="container p-3 my-3 " id="carrossel"  >
        <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src=".\enviados\carrossel1.jpg" alt="carrossel1">
                    <div class="carousel-caption">
                    
                        
                    </div>   
                    </div>
                    <div class="carousel-item">
                        <img src=".\enviados\carrossel2.jpg" alt="carrossel2">
                    <div class="carousel-caption">
                        
                        
                    </div>   
                </div>
                    <div class="carousel-item">
                        <img src=".\enviados\carrossel3.jpg" alt="carrossel3">
                        <div class="carousel-caption">
                    
                        
                        </div>   
                    </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span <i class="fas fa-arrow-left" style="font-size:30px;color:black;" ></i></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span <i class="fas fa-arrow-right" style="font-size:30px;color:black;"> </i> </span>
                </a>
            </div>

<main role="main">
  <div class="album py-5 bg-light">
      <div class="containe">

      <div class="row">
  <?php
        
        $sql = "select * from veiculo
                where destaque='S'";

            $resultado   = $conexao->query($sql);

            while($linha = $resultado->fetch_object()){
                    
            $id_veiculo = $linha->id_veiculo;
                     
            $id_motorista = $linha->id_motorista;
                    
        $sql2 = "select * from imagens_veiculo where id_veiculo = '$id_veiculo' order by id_imagem limit 1";

        $resultado2   = $conexao->query($sql2);
        $linha2 = $resultado2->fetch_object();

        $sql3 = "select * from motorista
                 where id_motorista = $id_motorista";

                 $resultado3   = $conexao->query($sql3);
                 $linha3 = $resultado3->fetch_object();


                    echo
                    "<div class=\"col-md-4\">
                        <div class=\"card mb-4 shadow-sm\">
                        <img class=\"card-img-top fotografiaa\" src='./enviados/$linha2->foto_veiculo' data-holder-rendered=\"true\">
                          <div class=\"card-body\">
                            <p class=\"card-text\"> Placa: $linha->placa</p>
                            <p class=\"card-text\"> Nome: $linha3->nome</p>
                            <p class=\"card-text\"> Capacidade: $linha->capacidade</p>
                            <p class=\"card-text\"> Categoria: $linha->categoria</p>
                            <div class=\"d-flex justify-content-between align-items-center\">
                              <div class=\"btn-group\">
                                <a href=\"perfil.php?id_veiculo=$linha->id_veiculo\" class=\"btn btn-sm btn-success\">Ver mais...</a>    
                              </div>
                              <small class=\"text-muted\">$linha3->assinatura</small>
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

















           <!-- CARROSEL 1 FOTO CRIANDO UM EM CIMA DO OUTRO EXPANSIVEL 
           
           <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      ?php
  
                            $sql = "select * from veiculo
                            where destaque='S'";

                                $resultado = $conexao->query($sql);
                                            
                                $c1 = 0;

                                while($linha = $resultado->fetch_object()){

                                    $id_veiculo = $linha->id_veiculo;
                                            
                                    $sql2 = "select * from imagens_veiculo where id_veiculo = '$id_veiculo' order by id_imagem limit 1";

                                        $resultado2 = $conexao->query($sql2);

                                        $contador=0;
                                        $indicadores = "";
                                        $texto       = "";
                            
                                        echo '       
                                        <div id="demo'.$c1.'" class="carousel slide" data-ride="carousel"> 
                                        <div class="carousel-inner">';
                                            
                                        while($linha2 = $resultado2->fetch_object())
                                        {
                                            if($contador == 0)
                                            {
                                                $indicadores .= '<li data-target="#demo'.$c1.'" data-slide-to="'.$contador.'" class="active"></li>';
                                                $texto="active";
                                            }
                                            else
                                            {
                                                $texto="";
                                                $indicadores .= '<li data-target="#demo'.$c1.'" data-slide-to="'.$contador.'"></li>';

                                            }

                                            echo '<div class="carousel-item '.$texto.'">
                                                    <img src="./enviados/'.$linha2->foto_veiculo.'" >
                                                    </div>';

                                            $contador++;
                                        }
                                            
                                        echo '</div>';                                       
                        ?>
                        
                        <ul class="carousel-indicators">                           
                            ?php
                                echo $indicadores;
                            ?>
                        </ul>                        
                        <a class="carousel-control-prev" href="#demo?php echo$c1;?>" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo?php echo$c1;?>" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                        <br>
                    </div>
                    
                    ?php
                        $c1++;
                        }
                    ?> 
                </div>
                    -->
        
</body>

</html>