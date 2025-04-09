<?php
session_start();

if(!isset($_SESSION["logado"]) || $_SESSION["logado"] != "S")
{
  header("Location:login.php");
}

    $vetor[0] = "";
    $vetor[1] = "";
    $vetor[2] = "";
    $vetor[3] = "active";
    $vetor[4] = "";

 include("header.php");

 $conexao = new mysqli("localhost","root","","yourtruck");

 $nome = $_SESSION["nome"];

 $id = $_SESSION['id'];

 echo"<p>aaa:$id</p>";

 $sql = "select * from motorista where situacao='ativo' and id_motorista = '$id' ";     

         
 $resultado = $conexao->query($sql);
        
  $linha = $resultado->fetch_object();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Index Logado</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <style>

/* CUSTOMIZA O CAROUSEL
-------------------------------------------------- */

/* Classe base do carousel */
.carousel {
 margin-bottom: 4rem;
}

/* Já que usamos posicionamento de imagens, precisaremos fazer alguns ajustes na legenda */
.carousel-caption {
 bottom: 3rem;
 z-index: 10;
}

/* Declaramos alturas, devido ao posicionamento do elemento img */
.carousel-item {
 height: 32rem;
 background-color: #0000;
}
.carousel-item > img {
 position: absolute;
 top: 0;
 left: 0;
 min-width: 100%;
 height: 32rem;
}


/* CONTEÚDO DO MARKETING
-------------------------------------------------- */

/* Alinha, centralmente, o texto dentro das três colunas abaixo do carousel */
.marketing .col-lg-4 {
 margin-bottom: 1.5rem;
 text-align: center;
}
.marketing h2 {
 font-weight: 400;
}
.marketing .col-lg-4 p {
 margin-right: .75rem;
 margin-left: .75rem;
}


/* Featrurezinhas
------------------------- */

.featurette-divider {
 margin: 5rem 0; /* Espaça o elemento <hr> mais */
}

/* Afina os cabeçalhos de marketing */
.featurette-heading {
 font-weight: 300;
 line-height: 1;
 letter-spacing: -.05rem;
}


/* CSS RESPONSIVE
-------------------------------------------------- */

@media (min-width: 40em) {
 /* Aumenta o tamanho do conteúdo do carousel */
 .carousel-caption p {
   margin-bottom: 1.25rem;
   font-size: 1.25rem;
   line-height: 1.4;
 }

 .featurette-heading {
   font-size: 50px;
 }
}

@media (min-width: 62em) {
 .featurette-heading {
   margin-top: 7rem;
 }
 #myCarousel
   {
       width: 100%  !important;
       height: 100% !important;
       text-align: center;
   }
}
    
</style>
</head>
<body>

<body>

      <p> 1- Sobre nos </p>
      <p> 2- Seja um de nossos motoristas </p>
      <p> 3- conheca nossos melhores motoristas</p>


<div class="container marketing">

<div class="container p-3 my-3 " id="carrossel"  >

    <div class="container p-3 my-3 " id="carrossel"  >

  <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">

        <div class="col-lg-4">
          <?php echo"<p $linha->foto_caminhoneiro> <img src='./enviados/$linha->foto_caminhoneiro' alt=\"Foto de Perfil\" class=\"rounded-circle\" height=\"140\" width=\"140\"> </p>";?>
          <?php echo"<h2>$linha->nome </h2>" ?> 
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-secondary" href="#" role="button">Ver mais »</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <?php echo"<p $linha->foto_caminhoneiro> <img src='./enviados/$linha->foto_caminhoneiro' alt=\"Foto de Perfil\" class=\"rounded-circle\" height=\"140\" width=\"140\"> </p>";?>
          <?php echo"<h2>$linha->nome </h2>" ?> 
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-secondary" href="#" role="button">Ver mais »</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <?php echo"<p $linha->foto_caminhoneiro> <img src='./enviados/$linha->foto_caminhoneiro' alt=\"Foto de Perfil\" class=\"rounded-circle\" height=\"140\" width=\"140\"> </p>";?>
          <?php echo"<h2>$linha->nome </h2>" ?> 
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-secondary" href="#" role="button">Ver mais »</a></p>
        </div><!-- /.col-lg-4 -->

      </div><!-- /.row -->

      <div class="carousel-caption">    
    </div>   
  </div>

    <div class="carousel-item">    
    <div class="row">
       
      <div class="col-lg-4">
        <img class="rounded-circle" src=".\enviados\carrossel1.jpg" alt="Generic placeholder image" width="140" height="140">
        <h2>Motorista 4</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        <img class="rounded-circle" src=".\enviados\carrossel2.jpg" alt="Generic placeholder image" width="140" height="140">
        <h2>Motorista 5</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        <img class="rounded-circle" src=".\enviados\carrossel3.jpg" alt="Generic placeholder image" width="140" height="140">
        <h2>Motorista 6</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->
    
  <div class="carousel-caption">
</div>   
</div>
<div class="carousel-item">
  <div class="row">
    <div class="col-lg-4">
      <img class="rounded-circle" src=".\enviados\carrossel1.jpg" alt="Generic placeholder image" width="140" height="140">
      <h2>Motorista 7</h2>
      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
      <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
    </div><!-- /.col-lg-4 -->

    <div class="col-lg-4">
      <img class="rounded-circle" src=".\enviados\carrossel2.jpg" alt="Generic placeholder image" width="140" height="140">
      <h2>Motorista 8</h2>
      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
      <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
    </div><!-- /.col-lg-4 -->

    <div class="col-lg-4">
      <img class="rounded-circle" src=".\enviados\carrossel3.jpg" alt="Generic placeholder image" width="140" height="140">
      <h2>Motorista 9</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
    </div><!-- /.col-lg-4 -->

  </div><!-- /.row -->
<div class="carousel-caption">
</div>   
</div>
</div>
        
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span <i class="fas fa-arrow-left" style="font-size:30px;color:black;"></i></span>
</a>

<a class="carousel-control-next" href="#demo" data-slide="next">
  <span <i class="fas fa-arrow-right" style="font-size:30px;color:black;"></i></span>
</a>

</div>
</div>
</div>

<?php

 include("footer.php");

?>
