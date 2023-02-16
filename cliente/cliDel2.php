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
    <title>Corretora Senac - Deletar</title>
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
    if (isset($_SESSION['msg'])) {
        # code...
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    $codigo=filter_input(INPUT_POST,'codigo',FILTER_SANITIZE_NUMBER_INT);
    $result_cliente="DELETE fROM e1_clientes WHERE codigo=$codigo";
    $resultado=mysqli_query($conn, $result_cliente);
    if (mysqli_affected_rows($conn)) {
        # code...
        echo"<h2><font style='color: blue;'>Cliente excluido com sucesso</font></h2>";
    }else {
        # code...
        echo"<h2><font style='color: red;'>Cliente não existe</font></h2>";
    }

    ?>

    <div class="form-container">
        <form action="" method="post">
            <label>Codigo:</label>
            <input type="number" name="codigo" required placeholder="Codigo do cliente que deseja excluir">
            <input type="submit" value="Consultar" name="Consultar">
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
            </script>
        </p>
    </footer>
    </center>
</body>

</html>