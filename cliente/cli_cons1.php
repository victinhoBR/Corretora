<<<<<<< HEAD
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
    <!-- css -->
    	<link rel="stylesheet" href="../css/style.css">

    <title>CORRETORA - SENAC: CONSULTA1</title>
</head>

<CENTER>
    <header class="cabecalho">
        <h1 class="titulo">CORRETORA - SENAC PARA TODOS</h1>
        <br>
        <h2 class="titulo">ACIDENTES NAO ACONTECEM POR ACASO, MAIS POR DESCASO</h2>
        <br>
        <h2 class="titulo">CONSULTAR DE CLIENTES</h2>
        <br>
        <hr><br>
    </header>

    <div class="alinha"></div>

    <div class="form-container">
        <form method="POST" action="cli_cons2.php">
            <label>CODIGO</label>
            <input type="number" require name="codigo" placeholder="digite o código do cliente ">
            <br>
            <input type="submit" name="consultar">
        </form>
        <br><br><br>

        <form method="POST" action="cli_consx.php">
            <label>PESQUISAR TODOS OS REGISTROS</label>
            <br>
            <input type="submit" name="consultar">
        </form>
    </div>
    <br><br><br>
    <a href="cliente.html">
        <img class="img-voltar" src="../img/retornar.png" width="20" height="20"></a>
    <br><br><br><br><br><br>
    <footer>
        <p style="color:#808080;">
            &copy;copyright
            <script>
                var year = new Date();
                document.writeln(+year.getUTCFullYear());
            </script>
        </p>
    </footer>
</CENTER>


<body>

</body>

=======
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
    <!-- css -->
    <link rel="stylesheet" href="style.css">

    <title>CORRETORA - SENAC: CONSULTA1</title>
</head>

<CENTER>
    <header class="cabecalho">
        <h1 class="titulo">CORRETORA - SENAC PARA TODOS</h1>
        <br>
        <h2 class="titulo">ACIDENTES NAO ACONTECEM POR ACASO, MAIS POR DESCASO</h2>
        <br>
        <h2 class="titulo">CONSULTAR DE CLIENTES</h2>
        <br>
        <hr><br>
    </header>

    <div class="alinha"></div>

    <div class="form-container">
        <form method="POST" action="cli_cons2.php">
            <label>CODIGO</label>
            <input type="number" require name="codigo" placeholder="digite o código do cliente ">
            <br>
            <input type="submit" name="consultar">
        </form>
        <br><br><br>

        <form method="POST" action="cli_consx.php">
            <label>PESQUISAR TODOS OS REGISTROS</label>
            <br>
            <input type="submit" name="consultar">
        </form>
    </div>
    <br><br><br>
    <a href="cliente.html">
        <img class="img-voltar" src="../img/retornar.png" width="20" height="20"></a>
    <br><br><br><br><br><br>
    <footer>
        <p style="color:#808080;">
            &copy;copyright
            <script>
                var year = new Date();
                document.writeln(+year.getUTCFullYear());
            </script>
        </p>
    </footer>
</CENTER>


<body>

</body>

>>>>>>> bff586f5b89faa8011c651ab2f81fc00e0f1ca32
</html>