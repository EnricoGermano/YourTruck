<?php

include("conexao.php");

?>
<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="./style.css" />
    

</head>

<body>

    <nav class="navbar navbar-expand-custom navbar-mainbg" style="border:0px solid red;padding:0px;">
        <a class="navbar-brand navbar-logo" href="index.php">
        <img src="imagens/logo2.jpeg" alt="Logo" style="width:50px;">   
        YourTruck
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button>
        

        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="border:0px solid red;margin:0px;">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
                
                <form style="margin-right: 60px;" class="form-inline my-2 my-lg-0" action="busca.php" method="post">
                    <input class="form-control 	mr-sm-2" type="search" placeholder="Pesquise" name="busca" aria-label="search" />
                    <button class="btn btn-outline bg-primary my-2 my-sm-0" type="submit">
                    <i class="fas fa-search" style="font-size:15px; color=#000000;" ></i>
                       
                    </button>
                </form>
              
				
				
                <li class="nav-item <?php echo $vetor[0];?>">
                    <a class="nav-link" href="perfil_usuario.php"><i class="fas fa-user" style="font-size:15px;" ></i>Perfil</a>
                </li>

                <li class="nav-item <?php echo $vetor[4];?>">
                    <a class="nav-link" href="sair.php"><i class="fas fa-user" style="font-size:15px;" ></i>Sair</a>
                </li>
        </div>
    </nav>
    
</body>

</html>