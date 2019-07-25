<?php

include_once "CardapioDAO.php";

if(isset($_POST['tipo']) && isset($_POST['valor']) && isset($_POST['nome']) && isset($_POST['desc'])) {
	$tipo = $_POST['tipo'];
	$valor= $_POST['valor'];
	$nome = $_POST['nome'];
	$descricao = $_POST['desc'];


	try{
		$opcoes = array(
		            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
		        );

		$con = new PDO("mysql:dbname=kutukakaguya;host=localhost", "root", "root", $opcoes);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		CardapioDAO::setConexao($con);

		$cardapio = new CardapioDAO;
		$cardapio->cadastrarCardapio($tipo, $valor, $nome, $descricao);
		header("location: cadastrarCardapio.html");
	} catch (Exception $e) {
		print $e->getMessage();
	}

}
