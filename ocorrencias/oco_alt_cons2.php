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


 <link rel="stylesheet" type="text/css" href="">
    <link href="" rel="stylesheet">
</head>
<body background="imagens/MicrosoftTeams-image (1).png">

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

<?php
$nr=filter_input(INPUT_POST, 'nr', FILTER_SANITIZE_NUMBER_INT);
$result_ocorrencias= "SELECT nr, data_, local_, descricao FROM e3_ocorrencias WHERE nr='$nr'";
$resultado_ocorrencias= mysqli_query($conn, $result_ocorrencias);
$row_ocorrencias;
?>

<form  method="POST" action="oco_alt_atualiza.php" name="alterar_cliente">
    <?php
        if($row_ocorrencias = mysqli_fetch_assoc($resultado_ocorrencias)){
            echo "CONSTA NA NOSSA BASE DE DADOS A OCORRENCIA: <br>";
            echo "<h1><font color='blue'> Para realizar a alteração preencha os campos abaixo: </font> </h1> <br>";
            

            echo "<label>NR...............: </label><input type='number' name='nr' placeholder='".$row_ocorrencias['nr']."'><br><br>";
            
            echo "<label>DATA.............: </label><input type='data' name='data' placeholder='".$row_ocorrencias['data_']."'><br><br>";

            echo "<label>LOCAL............: </label><input type='text' name='local' placeholder='".$row_ocorrencias['local_']."'><br><br>";

            echo "<label>DESCRICAO........: </label><input type='text' name='descricao' placeholder='".$row_ocorrencias['descricao']."'><br><br>";

            echo "<input type='submit' name='Atualiza' value='Atualiza'>";
        
        }else{
            echo "<h2><font color='red'>Cliente não existe!</font></h2>";

        }

    ?>
</form>
<br>
<br>
<br>

<a href="../cli_alt_atualiza.php"> <img src="../imagens/MicrosoftTeams-image (3).png" width="50" height="50"></a>
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



<center>

    
</body>
</html>