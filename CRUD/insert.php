<?php

	$pdo = new PDO('mysql:host=localhost;dbname=crud','root','');

	$data = date("Y-d-m");

	//Insert para controlar SqlInjection
	$sqlInsert = $pdo->prepare("INSERT INTO `clientes` VALUES (null, ?,?,?,?) ");

	$sqlInsert->execute(array("$_POST[nome]",$data,"$_POST[email]","$_POST[cidade]"));

	if($sqlInsert == true){

		echo 'Cadastrado com sucesso!';
	}else {

		echo 'Houve um erro ao cadastrar os dados';
	}

?>