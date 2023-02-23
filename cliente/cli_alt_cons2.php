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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- css -->
	<link rel="stylesheet" href="../css/style-cliente.css">

	<title>CORRETORA - SENAC: CONSULTA1</title>
</head>

<body>
		<!-- NAVBAR BOOTSTRAP -->
		<div class="navbarra">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<div class="container-fluid">
					<a class="navbar-brand" href="../index.html">SENAC-CTI</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav">
							<a class="nav-link" aria-current="page" href="cliente.html">Home</a>
							<a class="nav-link" href="#">Automóveis</a>
							<a class="nav-link" href="../ocorrencias/ocorrencias.html">ocorrências</a>
						</div>
					</div>
				</div>
			</nav>
		</div>
		<div class="alinha"></div>

		<CENTER>
			<h1>ATUALIZAR</h1>
		<div class="alinha"></div>

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

					echo "<h1><font color='blue'> Para realizar a alteração preencha o campo abaixo</font><h1>";
					echo "<p class='raiva'>CONSTA NA NOSSA BASE DE DADOS O CLIENTE: </p><br>";

					echo "<label class='raiva'>Codigo!</label><input type='number' name='codigo' maxlength='3' placeholder='" . $row_cliente['codigo'] . "'><br>";

					echo "<label class='raiva'>Nome!</label><input type='text' name='nome' maxlength='50' placeholder='"  . $row_cliente['nome'] . "'><br>";

					echo "<label class='raiva'>rg!</label><input type='text' name='rg' maxlength='7' placeholder='" . $row_cliente['rg'] . "'><br>";

					echo "<label class='raiva'>CFP!</label> <input type='text' name='cpf' maxlength='12' placeholder='" . $row_cliente['cpf'] . "'><br>";

					echo "<label class='raiva'>Telefone!</label> <input type='text' name='Telefone' maxlength='11' placeholder='" . $row_cliente['Telefone'] . "'><br><br>";

					echo "<input type='submit' name='atualiza' valuer='atualiza'>";
				} else {
					echo "<h2><font color='red'>Cliente Nao Encontrado</font></h2>";
				}
				?>

			</form>
			</div>
		</div>

		<br><br><br>
		<a href="cli_alt_cons.php"><img class="btn btn-outline-danger volta" src="../img/chevron-left.svg" title="Retornar" width="35" height="35"><img></a>

	</center>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


	<footer>
		<p style="color:#808080;">&copy;
			<script>
				var year = new Date();
				document.writeln(+year.getUTCFullYear());
			</script>
			Copyright - SENAC - Curso Técnico em Informática Prof° Valdemir e alunos Victor, Caleb e Mateus
			<br>
			Corretora Senac para todos<br>
			Acidentes não contecem por acasso, sim por descasso!<br>
			atualizar cliente
		</p>
	</footer>


</body>

</html>