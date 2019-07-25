<?php

include_once "EventoDAO.php";

if(isset($_POST['tipo']) && isset($_POST['data']) && isset($_POST['hora']) && isset($_POST['artista'])) {
	$tipo = $_POST['tipo'];
	$data= $_POST['data'];
	$hora = $_POST['hora'];
	$artista = $_POST['artista'];

	try{
		$opcoes = array(
								PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
						);

		$con = new PDO("mysql:dbname=kutukakaguya;host=localhost", "root", "root", $opcoes);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		EventoDAO::setConexao($con);

		$evento = new EventoDAO;
		$evento->cadastrarEvento($tipo, $data, $hora, $artista);
		header("location: cadastrarEvento.html");
	} catch (Exception $e) {
		print $e->getMessage();
	}

}
