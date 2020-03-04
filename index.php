<?php
	include_once('conexao.php');
	
	$listar="SELECT cartoes_rfid_numero_cartao FROM cartoes_rfid order by cartoes_rfid_numero_cartao";
	$query_list=mysqli_query($conecta, $listar);

	$rows=mysqli_num_rows($query_list);

	if($rows >0){

			while($ultimonumero=mysqli_fetch_array($query_list)){

					$numerocard=$ultimonumero['cartoes_rfid_numero_cartao']+1;
		}
	
		
	}else{

		$numerocard=1;
	}
	



	
	

	

?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sistema de Busca sem Refresh</title>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
		<script type="text/javascript" src="javascriptpersonalizado.js"></script>
		<link rel="stylesheet" type="text/css" href="estilo/style.css">
	</head>
	<body>
	
		<div id="interface">
		<h1>Cadastro de Usuários</h1>
		<form method="POST" id="form-cadastro" action="processa_cadastro.php">
			Número do cartão <input type="text" name="ncard" id="ncard" placeholder="<?php echo $numerocard;?>"><br>
			Usuário <input type="text" name="nusuario" id="nusuario" placeholder="Nome do Usuário"><br>
			<input type="submit" name="enviar" value="Cadastrar" id="btn">
		</form>
		<hr>
		<h1>Busca Usuários</h1>
		<form method="post" action="" id="form_busca">

			Buscar: <input type="text" name="nome" id="pesquisa" placeholder="Usuário">
					
			
		</form>
		

		<ul class="resultado">
			
			<?php

				include("busca.php");


			?>


		</ul>
		
		
		</div>
	</body>
</html>