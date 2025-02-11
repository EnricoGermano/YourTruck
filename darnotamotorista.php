<?php

  $motorista = $_POST["motorista"];
  $nota      = $_POST["nota"];

  include("conexao.php");

  $SQL = "insert into avaliacao (id_motorista,pontuacao) values ('$motorista','$nota')";
  $conexao->query($SQL);

  $sql_nota = "select media from vw_avaliacao_motorista where id_motorista='$motorista'";
  $resultado = $conexao->query($sql_nota)->fetch_object();
  echo "<span class=\"myratings\">$resultado->media</span>
          <br><h2>Obrigado pela sua avaliação!</h2>";