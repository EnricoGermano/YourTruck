<?php
    session_start();

    if(!isset($_SESSION["logado"]) || $_SESSION["logado"] != "S")
    {
        echo"<script> 
			    window.location.href = './login.php';
			 </script>";
    }

    $id_veiculo = $_GET['id_veiculo'];

    $_SESSION["id_veiculo"] = $id_veiculo;  
    
    $vetor[0] = "active";
   include("header.php");

   $nome = $_SESSION["nome"];
   $id   = $_SESSION["id"];


   $conexao = new mysqli("localhost","root","","yourtruck");

    $sql = "select * from veiculo where id_veiculo = $id_veiculo";

    $resultado = $conexao->query($sql);

        $linha = $resultado->fetch_object();

        $id_motorista = $linha->id_motorista;

    $sql1 = "select * from motorista where situacao='ativo' and id_motorista = '$id_motorista'";    
           
        $resultado1 = $conexao->query($sql1);
          
        $linha1 = $resultado1->fetch_object();

        $cep = $linha1->cep;
        
    
    ?>
    
<html>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <style>
            @import url(https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
            @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);

            body {
                background-color: #D32F2F;
                font-family: 'Calibri', sans-serif !important
            }

            fieldset,
            label {
                margin: 0;
                padding: 0
            }

            body {
                margin: 20px
            }

            h1 {
                font-size: 1.5em;
                margin: 10px
            }

            .rating {
                border: none;
                margin-right: 49px
            }

            .myratings {
                font-size: 85px;
                color: green
            }

            .rating>[id^="star"] {
                display: none
            }

            .rating>label:before {
                margin: 5px;
                font-size: 2.25em;
                font-family: FontAwesome;
                display: inline-block;
                content: "\f005"
            }

            .rating>.half:before {
                content: "\f089";
                position: absolute
            }

            .rating>label {
                color: #ddd;
                float: right
            }

            .rating>[id^="star"]:checked~label,
            .rating:not(:checked)>label:hover,
            .rating:not(:checked)>label:hover~label {
                color: #FFD700
            }

            .rating>[id^="star"]:checked+label:hover,
            .rating>[id^="star"]:checked~label:hover,
            .rating>label:hover~[id^="star"]:checked~label,
            .rating>[id^="star"]:checked~label:hover~label {
                color: #FFED85
            }

            .reset-option {
                display: none
            }

            .reset-button {
                margin: 6px 12px;
                background-color: rgb(255, 255, 255);
                text-transform: uppercase
            }

            .mt-100 {
                margin-top: 100px
            }

            .card {
                position: relative;
                display: flex;
                width: 350px;
                flex-direction: column;
                min-width: 0;
                word-wrap: break-word;
                background-color: #fff;
                background-clip: border-box;
                border: 1px solid #d2d2dc;
                border-radius: 11px;
                -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
                -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
                box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)
            }

            .card .card-body {
                padding: 1rem 1rem
            }

            .card-body {
                flex: 1 1 auto;
                padding: 1.25rem
            }

            p {
                font-size: 14px
            }

            h4 {
                margin-top: 18px
            }

            .btn:focus {
                outline: none
            }

            .btn {
                border-radius: 22px;
                text-transform: capitalize;
                font-size: 13px;
                padding: 8px 19px;
                cursor: pointer;
                color: #fff;
                background-color: #D50000
            }

            .btn:hover {
                background-color: #D32F2F !important
            }
            /* normal */
            body
            {
                background: -webkit-linear-gradient(left, #0000, #0000);
            }
            .emp-profile{
                padding: 3%;
                margin-top: 3%;
                margin-bottom: 3%;
                border-radius: 0.5rem;
                background: #fff;
            }
            .profile-img{
                text-align: center;
            }
            .profile-img img{
                width: 70%;
                height: 100%;
            }
            .profile-img .file {
                position: relative;
                overflow: hidden;
                margin-top: -20%;
                width: 70%;
                border: none;
                border-radius: 0;
                font-size: 15px;
                background: #212529b8;
            }
            .profile-img .file input {
                position: absolute;
                opacity: 0;
                right: 0;
                top: 0;
            }
            .profile-head h5{
                color: #333;
            }
            .profile-head h6{
                color: #0062cc;
            }

            .proile-rating{
                font-size: 12px;
                color: #818182;
                margin-top: 5%;
            }
            .proile-rating span{
                color: #495057;
                font-size: 15px;
                font-weight: 600;
            }
            .profile-head .nav-tabs{
                margin-bottom:5%;
            }
            .profile-head .nav-tabs .nav-link{
                font-weight:600;
                border: none;
            }
            .profile-head .nav-tabs .nav-link.active{
                border: none;
                border-bottom:2px solid #0062cc;
            }
            .profile-work{
                padding: 14%;
                margin-top: -15%;
            }
            .profile-work p{
                font-size: 12px;
                color: #818182;
                font-weight: 600;
                margin-top: 10%;
            }
            .profile-work a{
                text-decoration: none;
                color: #495057;
                font-weight: 600;
                font-size: 14px;
            }
            .profile-work ul{
                list-style: none;
            }
            .profile-tab label{
                font-weight: 600;
            }
            .profile-tab p{
                font-weight: 600;
                color: #0062cc;
            }
            
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
            #seta
            {
                position: absolute; 
                left: 60px; 
            	top: 85px; 
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
            height: 30rem!important; 
            width: 100%!important;
            }
        </style>

        <script>
            $(document).ready(function(){
                $("input[type='radio']").click(function()
                {
                    var sim = $("input[type='radio']:checked").val();

                    var motorista = $("#id_motorista").val();

                    
                    //Abrir um ajax e enviar o post para servidor;;
                    $.post("darnotamotorista.php",
                    {
                        motorista : motorista,
                        nota : sim
                    },
                    function(dados){
                        
                        $("#star").html(dados);    
                    });

                    

                    if (sim<3) 
                    { 
                        $('.myratings').css('color','red'); $(".myratings").text(sim); 
                    }
                    else
                    { 
                        $('.myratings').css('color','green'); $(".myratings").text(sim); 
                    } 
                }); 
            });

        </script>

    </head>

    <body>
        <input type="hidden" id="id_motorista" value="<?php echo $linha1->id_motorista;?>">
        <div class="container emp-profile">
            <form method="post">
            <div class="row" id="seta">
                <a href="busca.php">  
                <i class="fas fa-arrow-left" href="busca.php" style="font-size: 45px;"></i>
                </a>            
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <?php echo"<p $linha1->foto_caminhoneiro> <img src='./enviados/$linha1->foto_caminhoneiro' alt=\"Foto\" class=\"rounded\" width=\"250\"> </p>";?>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            <?php echo"$linha1->nome"?>
                        </h5>
                        <h6>
                           <?php
                                $cep = $linha1->cep;
                                $url = "https://viacep.com.br/ws/".$cep."/json/";
                                $data = file_get_contents($url);
                                $resposta = json_decode($data);
                                $cidade = $resposta->{'localidade'};
                                $uf = $resposta->{'uf'}; 
                                echo $cidade;
                                echo "-".$uf;
                            ?>
                        </h6>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Imagens do Veículo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Avaliação</a>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p>Informações: </p>
                    <a href="">Website Link</a><br/>
                    <a href="">Bootsnipp Profile</a><br/>
                    <a href="">Bootply Profile</a>
                    <p>Skills: </p>
                    <a href="">Web Designer</a><br/>
                    <a href="">Web Developer</a><br/>
                    <a href="">WordPress</a><br/>
                    <a href="">WooCommerce</a><br/>
                    <a href="">PHP Net</a><br/>
                    <br>
                    
                    <a href="./ChatApp/chat.php?user_id=<?php echo "$linha1->id_motorista";?>">
                        <button type="button" class="btn btn-info">Enviar Mensagem</button>
                    </a>

                </div>
            </div>
            
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    
                     <!-- carroussel que aumente de tamanho --> 
                        <?php
                            $id_veiculo = $_GET['id_veiculo'];

                            $sql = "select * from veiculo where id_veiculo ='$id_veiculo' ";
                    
                                $resultado = $conexao->query($sql);
                                            
                                $c1 = 0;

                                while($linha = $resultado->fetch_object()){

                                    $id_veiculo = $linha->id_veiculo;
                                            
                                    $sql = "select * from imagens_veiculo where id_veiculo = '$id_veiculo' order by id_imagem";

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
                
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="container">                       
                        <div class="row">
                            <div class="col-sm-3">
                             <div class="rating-block">
                                <div class="container d-flex justify-content-center mt-100">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body align-items-center text-center" id="star"> <span class="myratings">
                                                    <?php
                                                      $sql_nota = "select media from vw_avaliacao_motorista where id_motorista='$linha1->id_motorista'";
                                                      $resultado = $conexao->query($sql_nota)->fetch_object();
                                                      echo $resultado->media;
                                                    ?>
                                                </span>
                                                <br>
                                                <span id="blocoNota">
                                                    <h4 class="mt-1">De uma nota:</h4>
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label> 
                                                        <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label> 
                                                        <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label> 
                                                        <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label> 
                                                        <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label> 
                                                        <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label> 
                                                        <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label> 
                                                        <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label> 
                                                        <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label> 
                                                        <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label> 
                                                        <input type="radio" class="reset-option" name="rating" value="reset"/>
                                                    </fieldset>
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>

     
        
<?php
    include("footer.php");
?>