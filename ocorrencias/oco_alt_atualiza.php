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
    <title>CORRETORA SENAC - Atualizar Ocorrencia</title>

<<<<<<< HEAD
    <link rel="stylesheet" href="../css/style_debug.css">
=======
    <link rel="stylesheet" href="style_debug.css">
>>>>>>> bff586f5b89faa8011c651ab2f81fc00e0f1ca32


</head>
<center>
<header class="cabecalho">
        <h1 class="titulo">CORRETORA - SENAC PARA TODOS</h1>
        <br>
        <h2 class="titulo" align="center">ACIDENTES NÃO ACONTECEM POR ACASO, MAS SIM POR DESCASO!</h2>
        <br>
        <h2 class="titulo" align="center">ATUALIZAR OCORRENCIAS</h2>
</header>
<div class="alinha"></div>
<br>
<br>

 <?php
 $nr=$_POST['nr'];
 $data=$_POST['data'];
 $local=$_POST['local'];
 $descricao=$_POST['descricao'];
 

 $result_ocorrencias = "UPDATE e3_ocorrencias SET nr='$nr', data_='$data', local_='$local', descricao='$descricao' WHERE nr='$nr'";

 $resultado_ocorrencias = mysqli_query($conn, $result_ocorrencias);
 echo "<h2> <font color='green'> Atualizado com sucesso!</font></h2>";

 ?>

<div class="form-container">
 <form method="POST" action="oco_alt_cons.php" >
    <label>Fazer nova alteração: </label>
    <input type="submit" name="voltar" value="voltar">
</form>
</div>
<hr>
<br>
<br>
<br>
<a href="ocorrencias.html"> <img src="../img/retornar.png" width="30" height="30"></a>
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