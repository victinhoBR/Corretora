<?php
session_start();

include_once("../conexao.php");

$codigo = filter_input(INPUT_POST, 'codigo', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_NUMBER_INT);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_NUMBER_INT);

$result_cliente = "INSERT INTO e1_clientes(codigo, nome, cpf, rg, Telefone) values('$codigo','$nome','$rg','$cpf','$tel')";
$resultado = mysqli_query($conn, $result_cliente);

if ($conn->affected_rows == 1) {
    # code...
    $_SESSION['msg'] = "<h2><p style='color: green;'>Usuário Cadastrado Com sucesso</p></h2>";
} else {
    # code...
    $_SESSION['msg'] = "<h2><p style='color: red;'>Usuário Não Cadastrado</p></h2>";
}
header("Location:cliCad.php");
?>