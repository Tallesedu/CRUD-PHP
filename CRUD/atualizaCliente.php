<?php 

	$pdo = new PDO('mysql:host=localhost;dbname=CRUD', 'root','');

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$cidade = $_POST['cidade'];
	$email = $_POST['email'];

	$atualizaDados = $pdo->prepare("UPDATE `clientes` SET 
		nome_cliente = '".$nome."',
		cidade_cliente = '".$cidade."',
		email_cliente = '".$email."'
		WHERE id_cliente = '".$id."'");

	$atualizaDados->execute();

	if($atualizaDados == true){

		echo 'Dados atualizados com sucesso!';
	} else{

		echo 'Houve um erro ao atualizar os dados';
	}

?>