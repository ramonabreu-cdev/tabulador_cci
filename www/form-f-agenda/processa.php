<?php
session_start();
include_once("conexao.php");

$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_STRING);
$beneficiario = filter_input(INPUT_POST, 'beneficiario', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_EMAIL);
$especialidade = filter_input(INPUT_POST, 'especialidade', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$atendente = filter_input(INPUT_POST, 'atendente', FILTER_SANITIZE_STRING);
$covenio = filter_input(INPUT_POST, 'convenio', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_rn_259 = "INSERT INTO rn_259 (cpf,matricula, beneficiario, cidade, especialidade, telefone, atendente, convenio, created) VALUES ('$cpf', '$matricula', '$beneficiario', '$cidade', '$especialidade', '$telefone', '$atendente',  '$convenio',NOW())";
$resultado_rn_259 = mysqli_query($conn, $result_rn_259);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Cadastro Efetivado !</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Cadastro não Efetivado !</p>";
	header("Location: index.php");
}
