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
	<link rel="stylesheet" href="style_debug.css">
	<title>Document</title>
</head>
<center>
	<header class="cabecalho">
		<h1 class="titulo">CORRETORA - SENAC PARA TODOS</h1>
		<br>
		<h2 class="titulo">ACIDENTES NAO ACONTECEM POR ACASO, MAIS POR DESCASO</h2>
		<br>
		<h2 class="titulo">CONSULTAR DE OCORRÊNCIA</h2>
		<br>
		<hr><br>
	</header>
	<div class="alinha"></div>
	<div class="informacao" style="text-align:left;">
	<div class="form-container">
		<hr>

		<?php
		if (isset($_SESSION['msg'])) {
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}

		$result_ocorrencia = "SELECT NR, data_, local_, descricao FROM e3_ocorrencias";
		$resultado = mysqli_query($conn, $result_ocorrencia);

		while ($row_ocorrencia = mysqli_fetch_assoc($resultado)) {
			echo "NR.........." . $row_ocorrencia['NR'] . "<br>";
			echo "data........" . $row_ocorrencia['data_'] . "<br>";
			echo "descricao..." . $row_ocorrencia['descricao'] . "<br>";
			echo "local_......" . $row_ocorrencia['local_'] . "<br><hr>";
		}
		echo "Fim!";

		?>
	</div>
	</div>
	<br><br><br>
	<a href="oco_le_cons1.php">
		<img class="img-voltar" src="../img/retornar.png" width="20" height="20"></a>

	<br><br><br>

	<footer>
	<p style="color:#808080;">&copy; Copyright - SENAC - Curso Técnico em Informática Prof° Valdemir e alunos Victor, Caleb e Mateus
			<script>
				var year = new Date();
				document.writeln(+year.getUTCFullYear());
			</script>
		</p>
	</footer>
</center>

<body>

</body>

</html>