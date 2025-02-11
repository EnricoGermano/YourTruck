<?php

session_start();

if(!isset($_SESSION["logado"]) || $_SESSION["logado"] != "S")
{
    echo"<script> 
            window.location.href = './login.php';
         </script>";
}

    $vetor[0] = "active";
    $vetor[1] = "";
    $vetor[2] = "";
    $vetor[3] = "";
    $vetor[4] = "";

 include("header_motorista.php");
 include("footer_motora.php");
 include("conexao.php");


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
  .carousel-inner img 
    {
        width: 100% !important;
        height: 100% !important;
        margin: 0 auto;
    }
    
    }
  
    p 
    {
        color: #000000;
        font-style: verdana;
        font-size: 25px;
        text-align: center;
    }

    h1
    {
        font-style: verdana;
        color: #44d7ff;
        text-align: center;
    }
    #carrossel
    {
        width: 620px !important;
        height: 620px !important;
    }
    h3
    {
        color: #44d7ff;
        text-align: center;
    }
  body
  {
      
  }
  .carousel-control-next-icon
  {
    color: #000000;
  }
    
</style>
</head>

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
                <img src=".\enviados\carrossel1.jpg" alt="carrossel1" >
            <div class="carousel-caption">
               
                
            </div>   
            </div>
            <div class="carousel-item">
                <img src=".\enviados\carrossel2.jpg" alt="carrossel2">
            <div class="carousel-caption">
                
                
            </div>   
        </div>
            <div class="carousel-item">
                <img src=".\enviados\carrossel3.jpg" alt="carrossel3" >
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
    </div>
   
</body>

</html>
<
<?php
/* echo "<br><h2> Olá ".$_SESSION['nome']."!</h2>"; */
?>