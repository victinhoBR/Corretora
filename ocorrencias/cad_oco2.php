<?php
session_start();
include_once("../conexao.php");

$nr = filter_input(INPUT_POST, 'nr', FILTER_SANITIZE_NUMBER_INT);
$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_NUMBER_INT);
$local = filter_input(INPUT_POST, 'local', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

$result_ocorrencia = "INSERT INTO e3_ocorrencias(nr, data_, local_, descricao) VALUES('$nr','$data','$local','$descricao')";
$resultado = mysqli_query($conn, $result_ocorrencia);

if ($conn->affected_rows == 1) {
    # code...
    $_SESSION['msg'] = "<h2><p style='color: green;'>Usuário Cadastrado Com sucesso</p></h2>";
} else {
    # code...
    $_SESSION['msg'] = "<h2><p style='color: red;'>Usuário Não Cadastrado</p></h2>";
}
header("Location:cad_oco.php");
?>
