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

	<title>CORRETORA - SENAC: CONSULTA1</title>
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

	<?php
	$codigo = filter_input(INPUT_POST, 'codigo', FILTER_SANITIZE_NUMBER_INT);
	$result_cliente = "SELECT codigo,nome,rg,cpf,Telefone FROM e1_clientes WHERE codigo='$codigo'";

	$resultado_cliente = mysqli_query($conn, $result_cliente);
	$row_cliente;
	?>
	<div class="form-container">
	<form method="POST" name="alterar_cliente" action="cli_alt_atualiza.php">
		<?php
		if ($row_cliente = mysqli_fetch_assoc($resultado_cliente)) {

			echo "CONSTA NA NOSSA BASE DE DADOS O CLIENTE <br>";
			
			echo "<h1><font color='blue'> Para realizar a alteração preencha o campo abaixo</font><h1><br>";

			echo "<label>Codigo...........!</label>
			<input type='number' name='codigo' maxlength='3' placeholder='" . $row_cliente['codigo'] . "'><br><br>";

			echo "<label>Nome...........!</label>
			<input type='text' name='nome' maxlength='50' placeholder='"  . $row_cliente['nome'] . "'>
				<br><br>";

			echo "<label>rg...........!</label>
			<input type='text' name='rg' maxlength='7' placeholder='" . $row_cliente['rg'] . "'>
				<br><br>";

			echo "<label>CFP...........!</label> 
			<input type='text' name='cpf' maxlength='12' placeholder='" . $row_cliente['cpf'] . "'>
				<br><br>";

			echo "<label>Telefone...........!</label> 
			<input type='text' name='Telefone' maxlength='11' placeholder='" . $row_cliente['Telefone'] . "'>
				<br><br>";

			echo "<input type='submit' name='atualiza' valuer='atualiza'>";
		}else{
			echo "<h2><font color='red'>Cliente Nao Encontrado</font></h2>";
		}
		?>



	</form>
	</div>
	<br><br><br>
	<a href="cliente.html">
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