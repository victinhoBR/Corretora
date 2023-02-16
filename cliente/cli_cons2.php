<?php
session_start();
include_once("../conexao.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CORRETORA SENAC- PROCEÇAMENTO CONSULTA </title>

    <link rel="stylesheet" href="style_debug.css">
</head>

<center>
    <header class="cabecalho">
        <h1 class="titulo">CORRETORA - SENAC PARA TODOS</h1>
        <br>
        <h2 class="titulo">ACIDENTES NAO ACONTECEM POR ACASO, MAIS POR DESCASO</h2>
        <br>
        <h2 class="titulo">CONSULTAR DE CLIENTES</h2>
        <br>
        <hr><br>
    </header>

    <div class="informacao" style="text-align: left;">
    </script>
    <hr>
    <?php
    $codigo = filter_input(INPUT_POST,'codigo',FILTER_SANITIZE_NUMBER_INT);
    $result_cliente = "SELECT codigo,nome,cpf,rg,Telefone 
    FROM e1_clientes
    WHERE codigo=$codigo";
    $resultado = mysqli_query($conn, $result_cliente);
    
    if($row_cliente = mysqli_fetch_assoc($resultado)){
        echo"Código..........".$row_cliente['codigo']."<br>";
        echo"Nome............".$row_cliente['nome']."<br>";
        echo"cpf.............".$row_cliente['cpf']."<br>";
        echo"rg..............".$row_cliente['rg']."<br>";
        echo"Telefone........".$row_cliente['Telefone']."<br>";
    }else{
        echo"Cliente não cadastrado!";
    }
    ?>

    </div>
    <br><br><br><br><br><br><br><br><br>
<a href="cliente.html">
<img class="img-voltar" src="../img/retornar.png" width="20" height="20"></a>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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

</html>