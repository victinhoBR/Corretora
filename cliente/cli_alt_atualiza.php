<?php
session_start();
include_once("../conexao.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- css -->
	
	<link rel="stylesheet" href="style.css">

	<title>CORRETORA - SENAC: ATUALIZA</title>
</head>

<CENTER>
	<header class="cabecalho">
		<h1 class="titulo">CORRETORA - SENAC PARA TODOS</h1>
		<br>
		<h2 class="titulo">ACIDENTES NAO ACONTECEM POR ACASO, MAIS POR DESCASO</h2>
		<br>
		<h2 class="titulo">CONSULTAR DE CLIENTES</h2>
		<br>
		<hr><br>
	</header>
	<div class="alinha"></div>
	<hr><br>
	<?php

		$codigo=$_POST['codigo'];
		$nome=$_POST['nome'];
		$rg=$_POST['rg'];
		$cpf=$_POST['cpf'];
		$Tel=$_POST['Telefone'];

		$result_usuario = "UPDATE e1_clientes SET	codigo='$codigo',nome='$nome',rg='$rg',cpf='$cpf',Telefone='$Tel' WHERE codigo='$codigo'";

		$resultado_usuario = mysqli_query($conn, $result_usuario);
		echo "<h2><font color='green'>atualizado com sucesso</font></h2>";
	?>
	<form method="POST" name="consulta_cliente" action="cli_alt_cons.php">
		<label> Fazer nova Alteração</label>
		<input type="submit" name="voltar" value="voltar">

	</form>
	<hr>

	<br><br><br><br>
    <a href="cliente.html">
        <img class="img-voltar" src="../img/retornar.png" width="20" height="20">
    </a>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<br><br><br><br><br>
	<footer>
		<p style="color:#808080;">
			&copy;copyright
			<script>
				var year = new Date();
				document.writeln(+year.getUTCFullYear());
			</script>
		</p>
	</footer>
</CENTER>


<body>
</body>

</html>