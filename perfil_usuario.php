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
   include("header.php");
   include("footer.php");
?>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .card 
            {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                max-width: 300px;
                margin: auto;
                text-align: center;
                font-family: arial;
            }

            .title 
            {
                color: grey;
                font-size: 18px;
            }

            #btn
            {
                border: none;
                outline: 0;
                display: inline-block;
                padding: 8px;
                color: white;
                background-color: #000;
                text-align: center;
                cursor: pointer;
                width: 100%;
                font-size: 18px;
            }

            a 
            {
                text-decoration: none;
                font-size: 22px;
                color: black;
            }

            #btn:hover, a:hover 
            {
                opacity: 0.7;   
            }
            img
            {
                width: 250px;
                
            }
        </style>
    </head>
    <body>

    <br>
    </body>
</html>
<?php
    $conexao = new mysqli("localhost","root","","yourtruck");

    $nome = $_SESSION["nome"];

    $sql = "select * from clientes where situacao='ativo' and nome ='$nome' ";    
            
    $resultado = $conexao->query($sql);
          
        while( $linha = $resultado->fetch_object() )
        {
             echo  
                "<h2 style=\"text-align:center\">Perfil do Usuário</h2>

                <div class=\"card\">
                <br>
                  <p $linha->foto_usuario> <img src='./enviados/$linha->foto_usuario'> </p>
                  <h1>$linha->nome</h1>
                  <p class=\"title\">$linha->email</p>
                  <p class=\"title\">$linha->cpf</p>
                  <p class=\"title\">$linha->data_nascimento</p>
                  <div style=\"margin: 20px 0;\">
                    <a href=\"https://twitter.com/GMonteiroRJ\"><i class=\"fa fa-twitter\"></i></a>  
                    <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>  
                    <a href=\"#\"><i class=\"fa fa-facebook\"></i></a> 
                  </div>
                </div>";
             
        }
?>
