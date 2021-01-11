<?php
session_start();
include_once("conexao.php");

$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$atendente = filter_input(INPUT_POST, 'atendente', FILTER_SANITIZE_STRING);
$beneficiario = filter_input(INPUT_POST, 'beneficiario', FILTER_SANITIZE_STRING);
$convenio = filter_input(INPUT_POST, 'convenio', FILTER_SANITIZE_STRING);
$operadora = filter_input(INPUT_POST, 'operadora', FILTER_SANITIZE_STRING);


//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_multiplas_agendas = "INSERT INTO multiplas_agendas (cpf,matricula, email, telefone, atendente, beneficiario, convenio, operadora, created) VALUES ('$cpf', '$matricula', '$email', '$telefone', '$atendente', '$beneficiario', '$convenio', '$operadora',NOW())";
$resultado_multiplas_agendas = mysqli_query($conn, $result_multiplas_agendas);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Cadastro Efetivado !</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Cadastro não Efetivado !</p>";
	header("Location: index.php");
}

