<?php
session_start();
include_once("../conexao.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corretora Senac Consulta</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="">
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

        <div class="form-container">
            <form action="cliCons2.php" method="POST">
                <label>CÓDIGO:</label>
                <input type="number" require name="codigo" placeholder="CÓDIGO DO CLIENTE">
                <input type="submit" name="Consultar" value="Consultar"></input>
            </form>
            <br>
            <br>
            <br>
        </div>

        <div class="form-container">
            <form action="cliCons3.php" method="POST">
                <label>Pesquisa todos os registros</label>
                <input type="submit" name="Consultar" value="Consultar">
            </form>
        </div>
        <br>
        <br>
        <br>
        <hr>
        <a href="../cliente/cliente.html"><img src="../img/retornar.png" title="Retornar" width="35" height="35"><img></a>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <footer>
            <p style="color: #f35d8b;">&copy; Copyright - SENAC - Curso Técnico em Informática Prof° Valdemir e aluno Victor
                <script>
                    var year = new Date();
                    document.writeln(+year.getUTCFullYear());
                </script></p>
        </footer>
    </center>
</body>

</html>