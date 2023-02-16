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
  <?php
  if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }
  ?>
  <div class="form-container">
    <form action="oco_del_pro.php" method="post">
      <label>Codigo NR:</label>
      <input type="number" name="codigo" required placeholder="Digite o NR da ocorrência que deseja excluir">
      <input type="submit" name="DELETAR" value="DELETAR">

    </form>
  </div>
  </script>
  </div>
  <br><br><br><br>
  <a href="ocorrencias.html">
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