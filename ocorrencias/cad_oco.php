<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corretora senac - Ocorrencia</title>
</head>

<body background="../img/fundo.png">

    <center>
        <header class="cabecalho">
            <h1 class="titulo" align="center">Corretora Senac para todos</h1>
            <br>
            <h2 class="titulo" align="center">Acidentes não contecem por acasso, sim por descasso!</h2>
            <br>
            <h2 class="titulo" align="center">Cadastrar Ocorrencias</h2>
            <hr>
        </header>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>

        <div class="form-container">
            <form method="post" action="cad_oco2.php">

                <label>NR:</label>
                <input type="number" name="nr" maxlength="3" required autofocus placeholder="Digite o Nr">
                <br>
                <br>
                <label>Data:</label>
                <input type="date" name="data" required autofocus placeholder="yyyymmdd">
                <br>
                <br>
                <label>Local:</label>
                <input type="text" name="local" maxlength="20" required autofocus placeholder="Digite o Local">
                <br>
                <br>
                <label>Descrição:</label>
                <input type="text" name="descricao" maxlength="50" required autofocus placeholder="Digite a Descrição da Ocorrencia">
                <br>
                <br>
                <a href="cad_oco.php"><input type="submit" value="CADASTRAR"></a> 

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
            <p style="color: #f35d8b;">&copy; Copyright - SENAC - Curso Técnico em Informática Prof° Valdemir e alunos Victor, Caleb e Mateus
                <script>
                    var year = new Date();
                    document.writeln(+year.getUTCFullYear());
                </script>
            </p>
        </footer>

    </center>

</body>

</html>