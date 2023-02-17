<<<<<<< HEAD
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="../css/style.css">
	<title>corretora Senac</title>

</head>

<center>

	<header class="cabecalho">
		<h1 class="titulo" align="center">
			Corretora - Senac para todos</h1>
		<br>
		<h2>Acidentes não acontecem por acaso, mas por descaso</h2>
		<h1>Inclusão de clientes</h1>
	</header>

	<div class="alinha"></div>

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
	<a href="cliente.html">
		<img class="img-voltar" src="../img/retornar.png" width="20" height="20">
	</a>
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

</center>

<body>
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


=======
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="style.css">
	<title>corretora Senac</title>

</head>

<center>

	<header class="cabecalho">
		<h1 class="titulo" align="center">
			Corretora - Senac para todos</h1>
		<br>
		<h2>Acidentes não acontecem por acaso, mas por descaso</h2>
		<h1>Inclusão de clientes</h1>
	</header>

	<div class="alinha"></div>

	<br>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>

	<script>
		jQuery(function($) {
			$("#cpf").mask("999.999.999-99");
			$("#tel").mask("(99)99999-9999");
		})
	</script>

	<?php
	if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	?>
	<div class="form-container">
		<form action="cli_pro.php" method="POST">

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
			<input type="text" name="cpf" maxlength="15" require autofocus placeholder="999.999.999-99">
			<br><br>

			<label for="">Telefone:</label>
			<input type="text" name="tel" maxlength="12" require autofocus placeholder="(99)99999-9999">
			<br><br>

			<input type="submit" value="CADASTRA">

		</form>
	</div>
	<br><br><br><br>
	<a href="cliente.html">
		<img class="img-voltar" src="../img/retornar.png" width="20" height="20">
	</a>
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

</center>

<body>
</body>

>>>>>>> bff586f5b89faa8011c651ab2f81fc00e0f1ca32
</html>