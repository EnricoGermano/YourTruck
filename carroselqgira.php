<?php
    session_start();

    if(!isset($_SESSION["logado"]) || $_SESSION["logado"] != "S")
    {
        header("Location:login.php");
    }

    $vetor[0] = "";
    $vetor[1] = "";
    $vetor[2] = "";
    $vetor[3] = "active ";
    $vetor[4] = "";
 //  include("header_motorista.php");

   $conexao = new mysqli("localhost","root","","yourtruck");

   $nome = $_SESSION["nome"];
   $id = $_SESSION["id"];

   $sql = "select nome, email, telefone, cep, data_nascimento, foto_caminhoneiro, rg, cpf, cnh from motorista where situacao='ativo' and nome ='$nome' ";    
           
        $resultado1 = $conexao->query($sql);
          
        $linha1 = $resultado1->fetch_object();
         
    $sql_veiculo = "select placa, foto_caminhão, id_veiculo  from veiculo where id_motorista ='$id' ";
  
        $resultado2 = $conexao->query($sql_veiculo);

        $linha2 = $resultado2->fetch_object();

        $id_veiuculo = $linha2->id_veiculo;
    
    $sql_imagem = "select foto_veiculo from imagens_veiculo where id_veiculo = '$linha2->id_veiculo' ";

        $resultado3 = $conexao->query($sql_imagem);

        $linha3 = $resultado3->fetch_object();

        $foto1 = $linha3->foto_veiculo;

        $foto2 = $linha3->foto_veiculo;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        /* FONT AWESOME & not necessary for functions */
@import url('http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css');

body {
    padding-top: 15px;
    background-color: #f9f9f9;
}

/*REQUIRED*/
.carousel-row {
}

.slide-row {
    background-color: #ffffff;  
    border: 1px solid #e7e7e7;
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
.container{
    border-style:solid;
}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
    <hr>
    <div class="row carousel-row">
        <div class="col-xs-8 col-xs-offset-2 slide-row">
            <div id="carousel-1" class="carousel slide slide-carousel" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
              </ol>           
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                         <?php echo"<p $foto1> 
                         <img src='./enviados/$foto1' height=\"150\" width=\"150\"> </p>";?>
                </div>
                <div class="item">
                         <?php echo"<p $foto2> 
                         <img src='./enviados/$foto2' height=\"150\" width=\"150\"> </p>";?>
                </div>
                <div class="item">
                    <img src="http://lorempixel.com/150/150?rand=3" alt="Image">
                </div>
              </div>
            </div>
         </div>
        </div>
    </div>
</body>
</html>
