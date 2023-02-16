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
    <title>Consultora Senac procConsulta</title>
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
        </header>

        <div style="text-align: left;">
            <hr>
            <?php
                $codigo = filter_input(INPUT_POST, 'codigo', FILTER_SANITIZE_NUMBER_INT);
                $resultClient = "SELECT codigo, nome,cpf,rg,Telefone FROM e1_clientes where codigo=$codigo";
                $resultado=mysqli_query($conn, $resultClient);

                if ($row_cliente=mysqli_fetch_assoc($resultado)) {
                    # code...
                    echo"Código...:".$row_cliente['codigo']."<br>";
                    echo"Nome.....:".$row_cliente['nome']."<br>";
                    echo"CPF........:".$row_cliente['cpf']."<br>";
                    echo"RG.........:".$row_cliente['rg']."<br>";
                    echo"Cell........:".$row_cliente['Telefone']."<br>";
                }else {
                    # code...
                    echo"Cliente não possui cadastro";
                }

            ?>
        </div>
    </center>
</body>

</html>