<?php
session_start();
include_once("../conexao.php");

$codigo =  filter_input(INPUT_POST, 'codigo', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
$tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_STRING);

$result_cliente = "INSERT INTO e1_clientes(codigo,nome,cpf,rg,Telefone)
values('$codigo','$nome','$cpf','$rg','$tel')";
$resultado = mysqli_query($conn, $result_cliente);

if ($conn->affected_rows == 1) {
    $_SESSION['msg'] = "<h2><p style='color:green;'>Usuário cadastrado com sucesso!</p></h2>";
} else {
    $_SESSION['msg'] = "<h2><p style='color:green;'>Usuário nao foi cadastrado!</p></h2>";
}

header("Location:cli_cad.php");
 
?>