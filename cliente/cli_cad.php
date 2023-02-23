<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/style-cliente.css">
	<title>corretora Senac</title>

</head>

<body>
<!-- NAVBAR BOOTSTRAP -->
<div class="navbarra">

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="../index.html">SENAC-CTI</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
					aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
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
<center>

	<h1>CADASTRA</h1>

	<br>

	<?php
	if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	?>
	<div class="form-container">
		<form method="POST" name="meuForm" onsubmit="validarCPF()">

			<label for="">Código:</label>
			<input type="number" name="codigo" maxlength="3" require autofocus placeholder="Digite o Código">
			<br><br>

			<label for="">Nome:</label>
			<input type="text" name="nome" maxlength="50" require autofocus placeholder="Digite seu Nome">
			<br><br>

			<label for="">rg:</label>
			<input type="text" name="rg" maxlength="10" require autofocus placeholder="Digite seu rg">
			<br><br>

			<label for="">cpf:</label>
			<input type="text" name="cpf" maxlength="11" id="cpf" require autofocus placeholder="999.999.999-99">
			<br><br>

			<label for="">Telefone:</label>
			<input type="text" name="tel" maxlength="12" require autofocus placeholder="(99)99999-9999">
			<br><br>

			<input type="submit" value="CADASTRA">

		</form>
	</div>
	<br><br><br><br>
	
	<a href="cliente.html"><img class="btn btn-outline-danger volta" src="../img/chevron-left.svg" title="Retornar" width="35" height="35"><img></a>

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
		Cadastrar cliente
	</p>
</footer>

</body>

<script>
	jQuery(function($) {
		$("#cpf").mask("999.999.999-99");
		$("#tel").mask("(99)99999-9999");
	})
</script>
<script>
	function TestaCPF(strCPF) {
		var Soma;
		var Resto;
		Soma = 0;
		if (strCPF == "00000000000") return false;

		for (i = 1; i <= 9; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);
		Resto = (Soma * 10) % 11;

		if ((Resto == 10) || (Resto == 11)) Resto = 0;
		if (Resto != parseInt(strCPF.substring(9, 10))) return false;

		Soma = 0;
		for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);
		Resto = (Soma * 10) % 11;

		if ((Resto == 10) || (Resto == 11)) Resto = 0;
		if (Resto != parseInt(strCPF.substring(10, 11))) return false;
		return true;
	}
	
	function validarCPF() {
		var cpf = document.forms["meuForm"]["cpf"].value;
		if (TestaCPF(cpf)) {
			$("form").attr('action','cli_pro.php');
		} else {
			alert("CPF inválido!");
		}
		return false;
	}
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script src="jquery.js"></script>


</html>