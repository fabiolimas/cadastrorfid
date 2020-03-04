<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
	//Incluir a conexão com banco de dados
	include_once('conexao.php');
	
	//Recuperar o valor da palavra

	$usuarios= isset($_POST['palavra'])?$_POST['palavra']:'';
	if($usuarios == null){

		$usuarios=" ";
	}
	
	
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$buscar= "SELECT * FROM cartoes_rfid WHERE cartoes_rfid_usuario LIKE '%$usuarios%' order by cartoes_rfid_numero_cartao limit 9";
	$query= mysqli_query($conecta, $buscar);
	
	echo"<center><table border=1>";
	echo"<tr>";
	echo "<td><b>Nº do Cartão</td>";
	echo"<td><b>Nome do Usuário</td>";
	echo"</tr>";
	
	if(mysqli_num_rows($query) <= 0){
		echo "Nenhum usuário encontrado...";
	}else{
	
			while($rows = mysqli_fetch_assoc($query)){
			
			echo "<tr class='registro'>";
			echo "<td>".$rows['cartoes_rfid_numero_cartao']."</td>";
			echo "<td>".$rows['cartoes_rfid_usuario']."</td>";
			echo "</tr>";
		}
	}
	echo"</table></center>";
?>

</body>
</html>

