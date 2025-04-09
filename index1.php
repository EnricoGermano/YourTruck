<?php
    $vetor[0] = "active";
    include("header_inicial.php");
    include("footer.php");
?>

<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Template para o carousel Bootstrap</title>
    

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!-- Principal CSS do Bootstrap -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="carousel.css" rel="stylesheet">
  

<style>
          /* ESTILOS GLOBAIS
    -------------------------------------------------- */
    /* Padding abaixo do footer e texto mais suave no <body> */

    body {
    
      padding-bottom: 3rem;
      color: #5a5a5a;
    }


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
      background-color: #777;
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

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class=""></li>
          <li data-target="#myCarousel" data-slide-to="1" class=""></li>
          <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src=".\imagens\sobre1.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <p><a class="btn btn-lg btn-primary" href="login.php" role="button">Ver mais </a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src=".\imagens\sobre2.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <p><a class="btn btn-lg btn-primary" href="login.php" role="button">Ver mais </a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <img class="third-slide" src=".\imagens\sobre3.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <p><a class="btn btn-lg btn-primary" href="login.php" role="button">Ver mais</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Voltar</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Avançar</span>
        </a>
      </div>


      <!-- Mensagens de marketing e outras featurezinhas
      ================================================== -->
      <!-- Envolve o resto da página em outro container, para centralizar todo o conteúdo. -->

      <div class="container marketing">

        <!-- Três colunas de texto, abaixo do carousel -->
       <!-- <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Título</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div>--><!-- /.col-lg-4 -->
         <!-- <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Título</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div>--><!-- /.col-lg-4 -->
         <!-- <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Título</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div>--><!-- /.col-lg-4 -->
         <!-- <div class="col-lg-4">
-->

        <!-- COMEÇAM AS MENCIONADAS FEATUREZINHAS xD -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading"> YourTruck <span class="text-muted"> </span></h2>
            <p class="lead"> O YourTruck é um site onde você encontra um veiculo para a sua necessidade de todos os tamanhos e tipos de caminhões, caminhonetes e utilitários. Por exemplo: se você fosse se mudar hoje, saberia onde contratar um serviço de transporte? O YourTruck nasceu com o intuito de suprir a falta desse serviço no mercado. De maneira prática e eficaz unimos o util ao agradavel, juntando os clientes aos prestadores de serviço, deixando a vidas de todos mais fácil. </p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src=".\imagens\logo.jpeg"  data-holder-rendered="true">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Seja um dos nossos Motoristas <span class="text-muted"></span></h2>
            <p class="lead">O YourTruck é uma plataforma onde você motorista pode divulgar e realizar serviços de uma maneira muito prática! Aqui uniremos vocês aos clientes de uma novo jeito. </p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src=".\enviados\carrossel3.jpg" data-holder-rendered="true" style="width: 500px; height: 500px;">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Encontre o veiculo certo pra você! <span class="text-muted"></span></h2>
            <p class="lead">No YourTruck você ira encontrar uma grande variedade de veículos, desde uma simples caminhonete à um grande caminhão baú. Certamente você ira encontrar algum que satisfaça sua necessidade!</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src=".\enviados\carrossel1.jpg" data-holder-rendered="true" style="width: 500px; height: 500px;">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /FIM DAS FEATUREZINHAS *-* -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Voltar ao topo</a></p>
        <p>©YourTruck Company</p>
      </footer>
    </main>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Só faz o nossos placeholders de imagens funcionarem. Não precisar copiar a próxima linha! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>  
  

    <svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></styl></defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text></svg>
</body>
</html>
