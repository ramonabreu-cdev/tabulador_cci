<?php
session_start();
include_once("conexao.php");

$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_STRING);
$nome_beneficiario = filter_input(INPUT_POST, 'nome_beneficiario', FILTER_SANITIZE_STRING);
$especialidade = filter_input(INPUT_POST, 'especialidade', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$atendente = filter_input(INPUT_POST, 'atendente', FILTER_SANITIZE_STRING);
$data_ligacao = filter_input(INPUT_POST, 'data_ligacao', FILTER_SANITIZE_STRING);
$motivo_nao_agendamento = filter_input(INPUT_POST, 'motivo_nao_agendamento', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_motivos_nao_agendamento = "INSERT INTO motivos_nao_agendamento (cpf,matricula, nome_beneficiario, especialidade, telefone, atendente, data_ligacao, motivo_nao_agendamento, created) VALUES ('$cpf', '$matricula', '$nome_beneficiario', '$especialidade', '$telefone', '$atendente', '$data_ligacao', '$motivo_nao_agendamento', NOW())";
$resultado_motivos_nao_agendamento = mysqli_query($conn, $result_motivos_nao_agendamento);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Cadastro Efetivado !</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Cadastro não Efetivado !</p>";
	header("Location: index.php");
}
