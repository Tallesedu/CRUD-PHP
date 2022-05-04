<script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>

<?php 
	include("scripts.php");

	echo '<h1>Exibir Clientes</h1>';

	$pdo = new PDO('mysql:host=localhost;dbname=CRUD', 'root','');

	$sqlSelect = $pdo->prepare("SELECT * FROM `clientes`");

	$sqlSelect->execute();

	$fetchAll = $sqlSelect->fetchAll();

	$contRegistro = count($fetchAll);

		if($contRegistro == 0){
			echo '<b>Não encontramos clientes cadastrados!</b>';
		}

		else{

			echo '<b>'.$contRegistro.' Cliente(s) encontrado(s)'.'</b><br><br>';

			foreach ($fetchAll as $clientes) {
				echo '
						<span><b>Id do cliente: </span></b> '.$clientes['id_cliente'].'<br>
						<span><b>Nome do cliente: </span></b> '.$clientes['nome_cliente'].'<br>
						<span><b>Email do cliente: </span></b> '.$clientes['email_cliente'].'<br>
						<span><b>Cidade do cliente: </span></b> '.$clientes['cidade_cliente'].'<br>
						<span><b>Data de cadastro do cliente: </span></b> '.$clientes['data_cadastro'].'<br>
						<hr>
						<br>

							<form action = "formAtualiza.php" method="post">
								<input type="hidden" name="i" value="'.$clientes['id_cliente'].'"/>
								<button>Editar</button>
							</form>


						<br>

				';
			}
 	}
?>