<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 150px;
    height: 150px;
    position: relative;
    margin-top: 20%;
    margin-bottom: 20%;
    float: left;
  }
  </style>
</head>
<body>

<div id="demo" class="carousel slide" data-ride="carousel">
<?php
       $conexao = new mysqli("localhost","root",'',"yourtruck");

       $sql = "select * from imagens_veiculo order by id_imagem";

       $resultado = $conexao->query($sql);

        $contador=0;
        $indicadores = "";
        $texto       = "";
  
  
     echo '<div class="container"> <div class="carousel-inner">';
      
      while($linha = $resultado->fetch_object())
      {
        if($contador == 0)
        {
            $indicadores .= '<li data-target="#demo" data-slide-to="'.$contador.'" class="active"></li>';

           $texto="active";

        }
        else
        {
           $texto="";
           $indicadores .= '<li data-target="#demo" data-slide-to="'.$contador.'"></li>';

        }

        echo '<div class="carousel-item '.$texto.'">
                <img src="./enviados/'.$linha->foto_veiculo.'" >
              </div>';

        $contador++;
      }

  echo '</div> </div>';
  
    ?>
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <?php
       echo $indicadores;
    ?>
  </ul>


  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</body>
</html>
