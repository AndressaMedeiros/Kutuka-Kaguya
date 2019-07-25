<?php

    include("conexaobd.php");

    function cadastrarCliente($cliente){
      global $conexao;

      $sql = "INSERT INTO cliente(nome, cpf, endereco)
        VALUES('{$cliente['nome']}',
        '{$cliente['cpf']}',
        '{$cliente['endereco']}')";

        mysqli_query($conexao, $sql);
    }

    function listarClientes(){
      global $conexao;

      $sql = "SELECT * FROM cliente";
      $resultado = mysqli_query($conexao, $sql);
      $clientes = array();

      while($temp = mysqli_fetch_assoc($resultado)){
        $clientes[] = $temp;
      }

      return $clientes;
      
    }
 ?>
