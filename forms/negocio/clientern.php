<?php

    include "dao/clientebd.php";

   if(isset($_POST['nome']) && isset($_POST['cpf']) && isset($_POST['endereco'])){
      $cliente = array();

      $cliente['nome'] = $_POST['nome'];
      $cliente['cpf'] = $_POST['cpf'];
      $cliente['endereco'] = $_POST['endereco'];

      cadastroCliente($cliente);

    }

    function lista(){
      return listarClientes();
    }


 ?>
