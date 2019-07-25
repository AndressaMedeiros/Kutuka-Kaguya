<?php

include_once "PedidosDAO.php";

if(isset($_POST['tipo']) && isset($_POST['endereco']) && isset($_POST['CEP']) && isset($_POST['email'])) {
	$tipo = $_POST['tipo'];
	$endereco= $_POST['endereco'];
	$CEP = $_POST['CEP'];
	$email = $_POST['email'];

	try{
		$opcoes = array(
								PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
						);

		$con = new PDO("mysql:dbname=kutukakaguya;host=localhost", "root", "root", $opcoes);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		PedidosDAO::setConexao($con);

		$pedidos = new PedidosDAO;
		$pedidos->cadastrarPedidos($tipo, $endereco, $CEP);
		header("location: pedidosOnline.html");
	} catch (Exception $e) {
		print $e->getMessage();
	}

}
