<?php
session_start();
include_once("conexao.php");

$operadora = filter_input(INPUT_POST, 'operadora', FILTER_SANITIZE_STRING);
$data_solicitacao = filter_input(INPUT_POST, 'data_solicitacao', FILTER_SANITIZE_STRING);
$encaminhada_solicitacao = filter_input(INPUT_POST, 'encaminhada_solicitacao', FILTER_SANITIZE_STRING);
$beneficiario = filter_input(INPUT_POST, 'beneficiario', FILTER_SANITIZE_STRING);
$status_solicitacao = filter_input(INPUT_POST, 'status_solicitacao', FILTER_SANITIZE_STRING);
$data_abertura = filter_input(INPUT_POST, 'data_abertura', FILTER_SANITIZE_STRING);
$solicitacao = filter_input(INPUT_POST, 'solicitacao', FILTER_SANITIZE_STRING);
$sub_autorizacao = filter_input(INPUT_POST, 'sub_autorizacao', FILTER_SANITIZE_STRING);
$sub_ressarcimento = filter_input(INPUT_POST, 'sub_ressarcimento', FILTER_SANITIZE_STRING);
$sub_alt_cadastral = filter_input(INPUT_POST, 'sub_alt_cadastral', FILTER_SANITIZE_STRING);
$sub_cobertura_contratual = filter_input(INPUT_POST, 'sub_cobertura_contratual', FILTER_SANITIZE_STRING);
$sub_vendas = filter_input(INPUT_POST, 'sub_vendas', FILTER_SANITIZE_STRING);
$sub_outros = filter_input(INPUT_POST, 'sub_outros', FILTER_SANITIZE_STRING);


//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_fale_conosco = "INSERT INTO fale_conosco (operadora, data_solicitacao, encaminhada_solicitacao, beneficiario, status_solicitacao, data_abertura, solicitacao, sub_autorizacao, sub_ressarcimento, sub_alt_cadastral, sub_cobertura_contratual, sub_vendas, sub_outros, created) VALUES ('$operadora', '$data_solicitacao', '$encaminhada_solicitacao', '$beneficiario', '$status_solicitacao', '$data_abertura', '$solicitacao', '$sub_autorizacao', '$sub_ressarcimento', '$sub_alt_cadastral', '$sub_cobertura_contratual', '$sub_vendas', '$sub_outros',NOW())";
$resultado_fale_conosco = mysqli_query($conn, $result_fale_conosco);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Cadastro Efetivado !</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Cadastro não Efetivado !</p>";
	header("Location: index.php");
}

