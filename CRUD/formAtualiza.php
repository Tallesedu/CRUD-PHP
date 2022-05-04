<script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>

<?php 

include("scripts.php");

	$pdo = new PDO('mysql:host=localhost;dbname=CRUD','root','');

	$idCliente = $_POST['i'];

	$trazCliente = $pdo->prepare("SELECT * FROM `clientes` WHERE id_cliente = '".$idCliente."'");

	$trazCliente->execute();

	$fetch = $trazCliente->fetchAll();

	echo '
	
		<input type="text" id="nome" value="'.$fetch[0]['nome_cliente'].'"/><br><br>
		<input type="text" id="cidade" value="'.$fetch[0]['cidade_cliente'].'"/><br><br>
		<input type="text" id="email" value="'.$fetch[0]['email_cliente'].'"/><br><hr><br>
		

		<a id="atualizar" aid="'.$fetch[0]['id_cliente'].'"style="background:#f00;padding: 10px;color:#fff; cursor:pointer">Salvar Alterações </a>

		<br>
		<br>

		<div id="mensagens"></div>
	';
?>
