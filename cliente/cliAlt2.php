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
        $codigo = filter_input(INPUT_POST, 'codigo', FILTER_SANITIZE_NUMBER_INT);
        $result_cliente = "SELECT codigo, nome,rg,cpf,Telefone FROM e1_clientes WHERE codigo=$codigo";
        $resultado_cliente = mysqli_query($conn, $result_cliente);
        $row_cliente;
        ?>

        <form action="cliAtt.php" method="post">
            <?php
            if ($row_cliente = mysqli_fetch_assoc($resultado_cliente)) {
                # code...
                echo "CONSTA NA BASE DE DADOS O CLIENTE: <br>";
                echo "<h1><font style='color: blue;' >Para realizar a alteração dos preencha os campos abaixo:</font></h1>";

                echo "<label>Codigo......:</label>
                            <input type='number' name='codigo' placeholder='" . $row_cliente['codigo'] . "'><br><br>";

                echo "<label>Nome.....:</label>
                            <input type='text' name='nome' placeholder='" . $row_cliente['nome'] . "'><br><br>";

                echo "<label>RG.....:</label>
                            <input type='number' name='rg' placeholder='" . $row_cliente['rg'] . "'><br><br>";

                echo "<label>CPF.....:</label>
                            <input type='number' name='cpf' placeholder='" . $row_cliente['cpf'] . "'><br><br>";

                echo "<label>Cell.....:</label>
                            <input type='number' name='tel' placeholder='" . $row_cliente['Telefone'] . "'><br><br>";

                echo "<input type='submit' name='Atualizar' value='Atualizar'>";
            }else {
                # code...
                echo "<h1><font style='color: Red;' >Cliente Não existe</font></h1>";
            }
            ?>


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