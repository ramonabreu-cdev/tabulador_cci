<?php
session_start();
include_once("conexao.php");

$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_STRING);
$atendente = filter_input(INPUT_POST, 'atendente', FILTER_SANITIZE_STRING);
$beneficiario = filter_input(INPUT_POST, 'beneficiário', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$operadora = filter_input(INPUT_POST, 'operadora', FILTER_SANITIZE_STRING);
$retirada = filter_input(INPUT_POST, 'retirada', FILTER_SANITIZE_STRING);
$mes = filter_input(INPUT_POST, 'mes', FILTER_SANITIZE_STRING);


//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_boletos = "INSERT INTO boletos (cpf,matricula, beneficiario, atendente, email, operadora, retirada, mes, created) VALUES ('$cpf', '$matricula', '$atendente', '$beneficiario', '$email', '$operadora', '$retirada','$mes', NOW())";
$resultado_boletos = mysqli_query($conn, $result_boletos);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Cadastro Efetivado !</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Cadastro não Efetivado !</p>";
	header("Location: index.php");
}
