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
    <title>Corretora Senac atualizar</title>
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
            <h2 class="titulo" align="center">Alterar Dados de clientes</h2>
        </header>
        
        <?php
        $codigo = $_POST['codigo'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $Telefone = $_POST['tel'];
        $result_usuario = "UPDATE e1_clientes SET codigo='$codigo',nome='$nome',rg='$rg', cpf='$cpf', Telefone='$Telefone' WHERE codigo='$codigo'";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        echo "<h2 style='color: green;'><font>Atualizida com Sucesso</font></h2>";
        ?>

        <form action="cliaAlt.php" method="post">
            <label>Fazer nova alterção:</label>
            <input type="submit" name="voltar" value="Voltar">
        </form>
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
                </script>
            </p>
        </footer>
    </center>
</body>

</html>