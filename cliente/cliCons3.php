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

        <div style="text-align: left;">
            
            <?php
            if (isset($_SESSION['msg'])) {
                # code...
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            $result_cliente = "SELECT codigo, nome, cpf, rg, Telefone FROM e1_clientes";
            $resultado = mysqli_query($conn, $result_cliente);
            while ($row_cliente = mysqli_fetch_assoc($resultado)) {
                # code...
                echo "Código...:" . $row_cliente['codigo'] . "<br>";
                echo "Nome.....:" . $row_cliente['nome'] . "<br>";
                echo "CPF........:" . $row_cliente['cpf'] . "<br>";
                echo "RG.........:" . $row_cliente['rg'] . "<br>";
                echo "Cell........:" . $row_cliente['Telefone'] . "<br>";

                echo "<hr><br>";
            }
            ?>
        </div>
        

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