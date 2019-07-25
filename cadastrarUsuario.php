<?php

include_once "LoginDAO.php";

if(isset($_POST['usuario']) && isset($_POST['email']) && isset($_POST['senha'])) {
	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	try{
		$opcoes = array(
								PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
						);

		$con = new PDO("mysql:dbname=kutukakaguya;host=localhost", "root", "root", $opcoes);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		LoginDAO::setConexao($con);

		$login = new LoginDAO;
		$login->Cadastrarlogin($usuario, $email, $senha);
		header("location: SistemaRestaurante.php");
	} catch (Exception $e) {
		print $e->getMessage();
	}

}
