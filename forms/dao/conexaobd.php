<?php
    include("configuracao_bd.php");

    $conexao = mysqli_connect(SERVIDORBD, USUARIO, SENHA, BANCO);

    if(mysqli_connect_errno($conexao)){
      echo "Erro na conexão com o banco de dados.";
      die();
    }
 ?>
