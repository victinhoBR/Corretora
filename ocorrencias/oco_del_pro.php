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
  <title>CORRETORA SENAC- PROCEDIMENTO DELETAR </title>

  <link rel="stylesheet" href="style_debug.css">
</head>
<div class="alinha"></div>
<center>
  <header class="cabecalho">
    <h1 class="titulo">CORRETORA - SENAC PARA TODOS</h1>
    <br>
    <h2 class="titulo">ACIDENTES NAO ACONTECEM POR ACASO, MAIS POR DESCASO</h2>
    <br>
    <h2 class="titulo">DELETAR OCORRÊNCIA</h2>
    <br>
    <hr><br>
  </header>
  <hr><br>
  <div class="form-container">
  <?php
  if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }

  $nr = filter_input(INPUT_POST, 'NR', FILTER_SANITIZE_NUMBER_INT);
  $result_ocorrencia = "DELETE FROM e3_ocorrencias WHERE NR=$nr";
  $resultado = mysqli_query($conn, $result_ocorrencia);

  if (mysqli_affected_rows($conn)) {
    echo "<h2><font color='blue'>ocorrência Excluído com sucesso</font></h2>";
  } else {
    echo "<h2><font>ocorrência nao existe</font></h2>";
  }
  ?>
  </div>

  </script>
  </div>
  <br><br><br><br><br><br><br><br><br>
  <a href="ocorrencias.html">
    <img class="img-voltar" src="../img/retornar.png" width="20" height="20"></a>

  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  <footer>
  <p style="color:#808080;">&copy; Copyright - SENAC - Curso Técnico em Informática Prof° Valdemir e alunos Victor, Caleb e Mateus
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