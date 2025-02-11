<?php
$vetor[0] = "active";
 include("header_inicial.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Cadastro</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css1/main.css" rel="stylesheet" media="all">

  


    <style>
.card {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  background: #fff;
}

.card-5 {
  background: #fff;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  -webkit-box-shadow: 0px 8px 20px 0px #000000 !important; 
  -moz-box-shadow: 0px 8px 20px 0px #090909 !important;
  box-shadow: 0px 8px 20px 0px #000000 !important;
}

.card-5 .card-heading {
  padding: 20px 0;
  background: #1e90ff !important;
  -webkit-border-top-left-radius: 10px;
  -moz-border-radius-topleft: 10px;
  border-top-left-radius: 10px;
  -webkit-border-top-right-radius: 10px;
  -moz-border-radius-topright: 10px;
  border-top-right-radius: 10px;
}

.card-5 .card-body {
  padding: 52px 85px;
  padding-bottom: 73px;
}

@media (max-width: 767px) {
  .card-5 .card-body {
    padding: 40px 30px;
    padding-bottom: 50px;
  }
}
    </style>

<script type="text/javascript">
    $(document).ready(function(){
      $("#placa").mask("AAA-0000");
      });
    
      $(document).ready(function(){
      $("#telefone").mask("00-000000000");
      });
</script>

</head>

<body>
    <div class="p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Cadastre seu veiculo</h2>
                </div>
                <div class="card-body">
                    <form action="./confirma_cadastro_veiculo.php" method="post" enctype="multipart/form-data">
                 
                       <div class="form-row">
                        <div class="name"> <i class="fas fa-camera"style="font-size: 18px;"></i>
                            Foto do veiculo</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="file" name="foto_veiculo" id="foto_veiculo" multiple required>
                            </div>
                        </div>
                    </div>
                    <div align="center">
                            <button class="btn btn--radius-2 btn--red" type="submit">Registrar-se</button>
                     </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
