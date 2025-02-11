<?php
    session_start();

    if(!isset($_SESSION["logado"]) || $_SESSION["logado"] != "S")
    {
        header("Location:login.php");
    }

    $vetor[0] = "active";
    $vetor[1] = "";
    $vetor[2] = "";
    $vetor[3] = "";
    $vetor[4] = "";
   include("header_motorista.php");

   $conexao = new mysqli("localhost","root","","yourtruck");

   $nome = $_SESSION["nome"];
   $id = $_SESSION["id"];

   $sql = "select nome, email, telefone, cep, data_nascimento, foto_caminhoneiro, rg, cpf, cnh from motorista where situacao='ativo' and nome ='$nome' ";    
           
    $resultado1 = $conexao->query($sql);
          
    $linha1 = $resultado1->fetch_object();
         
 
?>


<html>
<head>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Perfil Motorista</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!-- Principal CSS do Bootstrap -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para este template -->
    <link href="album.css" rel="stylesheet">
  </head>
<style>
    
    body{
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
  }
  .main-body {
      padding: 15px;
  }
  .card {
      box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
  }

  .card {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 0 solid rgba(0,0,0,.125);
      border-radius: .25rem;
  }

  .card-body {
      flex: 1 1 auto;
      min-height: 1px;
      padding: 1rem;
  }

  .gutters-sm {
      margin-right: -8px;
      margin-left: -8px;
  }

  .gutters-sm>.col, .gutters-sm>[class*=col-] {
      padding-right: 8px;
      padding-left: 8px;
  }
  .mb-3, .my-3 {
      margin-bottom: 1rem!important;
  }

  .bg-gray-300 {
      background-color: #e2e8f0;
  }
  .h-100 {
      height: 100%!important;
  }
  .shadow-none {
      box-shadow: none!important;
  }
      /* FONT AWESOME & not necessary for functions */
      @import url('http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css');

  body {
      background-color: #f9f9f9;
  }

  /*REQUIRED*/

  .slide-row {
      background-color: #ffffff;  
      border: 10px solid #e7e7e7;
      overflow: hidden;
      position: relative;
  }


  .slide-carousel {
      float: left;
      display: inline-block;
  }

  .slide-carousel .carousel-indicators {
      margin-bottom: 0;
      bottom: 0;
      background: rgba(0, 0, 0, .5);
  }

  .slide-carousel .carousel-indicators li {
      border-radius: 0;
      width: 20px;
      height: 6px;
  }

  .slide-carousel .carousel-indicators .active {
      margin: 1px;
  }

  .slide-content {
      position: absolute;
      top: 0;
      left: 20%;
      display: block;
      float: left;
      max-height: 76%;
      padding: 1.5% 2% 2% 2%;
      overflow-y: auto;
  }

  .slide-content h4 {
      margin-bottom: 3px;
      margin-top: 0;
  }

  .slide-footer {
      position: absolute;
      bottom: 0;
      left: 20%;
      width: 78%;
      height: 20%;
      margin: 1%;
  }

  /* Scrollbars */
  .slide-content::-webkit-scrollbar {
    width: 5px;
  }
  
  .slide-content::-webkit-scrollbar-thumb:vertical {
    margin: 5px;
    background-color: #999;
    -webkit-border-radius: 5px;
  }
  
  .slide-content::-webkit-scrollbar-button:start:decrement,
  .slide-content::-webkit-scrollbar-button:end:increment {
    height: 5px;
    display: block;
  }
  .carousel-inner img {
    height: 225px!important; 
    width: 100%!important;
  }
</style>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container">
      <div class="main-body">
     
          </div>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Início</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Motorista</a></li>
                <li class="breadcrumb-item active" aria-current="page">Perfil</li>
              </ol>
            </nav>
            <!-- /Breadcrumb -->
      
            <div class="row gutters-sm">
              <div class="col-md-4 mb-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                      <?php echo"<p $linha1->foto_caminhoneiro> <img src='./enviados/$linha1->foto_caminhoneiro' alt=\"Foto\" class=\"rounded\" width=\"250\"> </p>";?>
                      <div class="mt-3">
                      <?php echo"<h4> $linha1->nome </h4>";?>
                      <?php echo"<p class=\"\text-secondary mb-1\"\> Telefone: $linha1->telefone </p><br>";?> 
                        <button class="btn btn-primary">Editar Foto</button>
                        <!-- public function excluir($placa)
                          {
                              $this->db->where("placa","$placa")->delete("veiculos");  

                              //ou
                              //$sql = "delete from veiculos where placa='$placa'";
                              //$this->db->query($sql);

                              redirect($this->link."consulta");
                         } -->
                        <input type="button" class="btn btn-outline-primary" onclick="location.href='./ChatApp/users.php';" value="Mensagens" />
                      </div>
                    </div>
                  </div>
                </div>
                <br>
                <!-- carroussel que aumente de tamanho --> 
                <?php
                    $conexao = new mysqli("localhost","root",'',"yourtruck");

                      $sql2 = "select id_veiculo from veiculo where id_motorista ='$id' ";
 
                      $resultado2 = $conexao->query($sql2);
                        
                      $c1 = 0;

                      while($linha2 = $resultado2->fetch_object()){

                        $id_v = $linha2->id_veiculo;
                        
                      $sql = "select * from imagens_veiculo where id_veiculo = '$id_v' order by id_imagem";

                        $resultado = $conexao->query($sql);

                          $contador=0;
                          $indicadores = "";
                          $texto       = "";

                          echo '       
                          <div id="demo'.$c1.'" class="carousel slide" data-ride="carousel"> 
                          <div class="carousel-inner">';
                        
                        while($linha = $resultado->fetch_object())
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
                                  <img src="./enviados/'.$linha->foto_veiculo.'" >
                                </div>';

                          $contador++;
                        }
                        
                        echo '</div>';
                      
                        ?>
                        <ul class="carousel-indicators">
                        <?php
                          echo $indicadores;
                        ?>
                      </ul>
    
                      <a class="carousel-control-prev" href="#demo<?php echo$c1;?>" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                      </a>
                      <a class="carousel-control-next" href="#demo<?php echo$c1;?>" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                      </a>
                      <br>
                      </div>

                    <?php
                    $c1++;
                      }
                      
                    ?> 
                  </div>

            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nome:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo"$linha1->nome"?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                <?php echo"$linha1->email" ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Telefone:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo"$linha1->telefone"?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">RG:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo"$linha1->rg" ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">CPF:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo"$linha1->cpf" ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">CNH:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo"$linha1->cnh" ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">CEP:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo"$linha1->cep" ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="edita_perfil">Editar Dados</a>
                    </div>
                  </div>
                </div>
              </div>
       
              <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"></i>Ultimos Serviços:</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"></i>Ultimas Avaliações:</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div> 
                      <!-- public function consulta()
                        {
                            $dados["arquivo"] = $this->link."view_consulta_veiculos";
                            
                            $dados["titulo"]  = "Relação de veiculos";

                            $dados["resultado"] = $this->db->get($this->tabela)->result();

                            $this->load->view("view_principal",$dados);

                        } -->
                    </div>
                  </div>
                </div>
              </div>
   
            </div>
          </div>

        </div>
    </div>

</body>
    </html>

    <?php
    include("footer_motora.php");
    ?>

