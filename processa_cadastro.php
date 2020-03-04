
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
	<script type="text/javascript">
		function voltar(){

			setTimeout("window.location='index.php'",1000);


		}
	</script>
</head>
<body>
	<?php

	include('conexao.php');


	$ncard=$_POST['ncard'];
	$nome=$_POST['nusuario'];
	
	$checagem="SELECT * FROM cartoes_rfid where cartoes_rfid_numero_cartao =$ncard";
	$checar=mysqli_query($conecta, $checagem);
	
	$row=mysqli_num_rows($checar);
	
	if($row !=0){
	
	echo "Número de Cartão já cadastrado, cadastre o novo usuario com um novo número de cartão";
	echo"<script>voltar()</script>";
	
	}else{
	
	


	$inserir="INSERT INTO cartoes_rfid (cartoes_rfid_id, cartoes_rfid_numero_cartao, cartoes_rfid_usuario) VALUES (null,$ncard,'$nome ')";
	$query=mysqli_query($conecta, $inserir);

	if($query){
		echo "Cartao cadastrado com sucesso...";
		echo"<script>voltar()</script>";

	}else{

		echo "Erro ao tentar cadastrar <br>";
		echo mysqli_error($conecta);
	}
}

?>

</body>
</html>

