<?php

include_once "ReservasDAO.php";

if(isset($_POST['data']) && isset($_POST['hora']) && isset($_POST['mesa']) && isset($_POST['quant_pessoa'])) {
	$data = $_POST['data'];
	$hora= $_POST['hora'];
	$mesa = $_POST['mesa'];
  $quant_pessoa = $_POST['quant_pessoa'];


	try{
		$con = new PDO("mysql:dbname=kutukakaguya;host=localhost", "root", "root");
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		ReservasDAO::setConexao($con);

		$reservas = new ReservasDAO;
		$reservas->cadastrarReservas($data, $hora, $mesa, $quant_pessoa);
		header("location: reservas.html");
	} catch (Exception $e) {
		print $e->getMessage();
	}

}
