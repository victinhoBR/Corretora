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
	<link rel="stylesheet" href="style_debug.css">

	<title>CORRETORA - SENAC: CONSULTA</title>
</head>

<CENTER>
	<header class="cabecalho">
		<h1 class="titulo">CORRETORA - SENAC PARA TODOS</h1>
		<br>
		<h2 class="titulo">ACIDENTES NAO ACONTECEM POR ACASO, MAIS POR DESCASO</h2>
		<br>
		<h2 class="titulo">CONSULTAR DE OCORRÊNCIA</h2>
		<br>
		<hr><br>
	</header>
	<div class="form-container">
		<form method="POST" action="oco_le_cons2.php">
			<label>CODIGO NR</label>
			<input type="number" require name="NR" placeholder="digite o código NR do Ocorrência ">
			<br>
			<input type="submit" name="consultar" value="consultar">
		</form>
		<br><br><br>
	</div>
	<div class="form-container">
		<form method="POST" action="oco_le_consx.php">
			<label>PESQUISAR TODOS OS REGISTROS</label>
			<br>
			<input type="submit" name="consultar" value="consultar">
		</form>
	</div>
	<br><br><br>
	<a href="ocorrencias.html">
		<img class="img-voltar" src="../img/retornar.png" width="20" height="20"></a>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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