<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corretora senac</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
</head>

<body background="../img/fundo.png">

<center>
    <header class="cabecalho">
        <h1 class="titulo" align="center">Corretora Senac para todos</h1>
        <br>
        <h2 class="titulo" align="center">Acidentes não contecem por acasso, sim por descasso!</h2>
        <br>
        <h2 class="titulo" align="center">Inclusão de clientes</h2>
        <hr>
    </header>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script>
        jQuery(function($) {
            $("#cpf").mask("999.999.999-99")
            $("#tel").mask("(99)9999-9999")
        })
    </script>

    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

    <div class="form-container">
        <form  method="post" action="cliProd.php">

            <label>Código:</label>
            <input type="number" name="codigo" maxlength="3" required autofocus placeholder="Digite o código">
            <br>
            <br>
            <label>Nome:</label>
            <input type="text" name="nome" maxlength="50" required autofocus placeholder="Digite seu nome">
            <br>
            <br>
            <label>RG:</label>
            <input type="text" name="rg" maxlength="10" required autofocus placeholder="Digite seu RG">
            <br>
            <br>
            <label>CPF:</label>
            <input type="text" name="cpf"  maxlength="11" required autofocus placeholder="999.999.999-99">
            <br>
            <br>
            <label>Celular:</label>
            <input type="text" name="tel"  maxlength="10" required autofocus placeholder="(99)9999-9999">
            <br>
            <br>
            <input type="submit" value="CADASTRAR">

        </form>
    </div>
    <br>
    <br>
    <br>
    <br>
    <a href="../cliente/cliente.html"><img src="../img/retornar.png" title="Retornar" width="35" height="35"><img></a> 
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br><br>
    <br>
    <br><br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br>
    <footer>
        <p style="color: #f35d8b;">&copy; Copyright - SENAC - Curso Técnico em Informática Prof° Valdemir e aluno Victor
    <script>
        var year=new Date();document.writeln(+year.getUTCFullYear());
    </script></p>
    </footer>
    
</center>

</body>

</html>
