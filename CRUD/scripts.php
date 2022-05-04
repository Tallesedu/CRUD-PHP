<script>
	

	$(document).ready(function(){
		$("#salvar_cadastro").on('click', function(){

			$.ajax({

				url:'insert.php',
				type:'POST',
				data:{
					nome:$("#nome_cliente").val(), 
				 	email:$("#email_cliente").val(),
				 	cidade:$("#cidade_cliente").val()
				 },
				 beforeSend: function(){

				 	$("#mensagens").html("Carregando...");
				 },
				 success: function(data){

				 	$("#mensagens").html(data);
				 },
				 error: function(data){

				 	$("#mensagens").html("Não foi encontrada a página insert!");
				 }

			});

		});

		$("#atualizar").on('click',function(){

			var id = $(this).attr("aid");
			var nome = $("#nome").val();
			var cidade = $("#cidade").val();
			var email = $("#email").val();

			$.ajax({
				url:'atualizaCliente.php',
				type: 'POST',
				data:{id:id,nome:nome,cidade:cidade,email:email},
				beforeSend: function(){
					$("#mensagens").html("Carregando...");
				},

				success: function(data){
					$("#mensagens").html(data);
				},

				error: function(data){
					$("#mensagens").html("Houver um erro!");
				}
			});

		});
	});



</script>