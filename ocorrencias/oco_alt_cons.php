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
    <title>CORRETORA SENAC - atualizar_ocorrencia</title>

    <link rel="stylesheet" href="../css/style_debug.css">
</head>
<div class="alinha"></div>
<center>
<header class="cabecalho">
        <h1 class="titulo">CORRETORA - SENAC PARA TODOS</h1>
        <br>
        <h2 class="titulo" align="center">ACIDENTES NÃO ACONTECEM POR ACASO, MAS SIM POR DESCASO!</h2>
        <br>
        <h2 class="titulo" align="center">ATUALIZAR OCORRENCIAS</h2>
</header>
<br>
<br>
<center>
<div class="form-container">
 
    <form method="POST" name="consultar_cliente" action="oco_alt_cons2.php" >
        <label>Código da ocorrencia(NR): </label>
        <input type="number" required autofocus placeholder="Nr"name="nr">
        <input type="submit" name="enviar" value="consultar">   
    </form>
</div>
<br>
<hr>

<a href="ocorrencias.html"> <img src="../img/retornar.png" width="50" height="50"></a>
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
        <p style="color:#808080;">&copy; Copyright - SENAC - Curso Técnico em Informática Prof° Valdemir e alunos Victor, Caleb e Mateus
    <script>
        var year=new Date();document.writeln(+year.getUTCFullYear());
    </script></p>
    </footer>
</center>

<body>
    
</body>
</html>