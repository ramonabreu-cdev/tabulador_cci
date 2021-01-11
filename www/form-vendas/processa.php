<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cadastro_correto = filter_input(INPUT_POST, 'cadastro_correto', FILTER_SANITIZE_STRING);
$itens_contratuais = filter_input(INPUT_POST, 'itens_contratuais', FILTER_SANITIZE_STRING);
$informacoes_financeiras = filter_input(INPUT_POST, 'informacoes_financeiras',  FILTER_SANITIZE_STRING);
$info_numero_carteirinha = filter_input(INPUT_POST, 'info_numero_carteirinha',  FILTER_SANITIZE_STRING);
$canais_digitais = filter_input(INPUT_POST, 'canais_digitais',  FILTER_SANITIZE_STRING);
$incentivou_canais_digitais = filter_input(INPUT_POST, 'incentivou_canais_digitais',  FILTER_SANITIZE_STRING);
$info_canais_digitais = filter_input(INPUT_POST, 'info_canais_digitais',  FILTER_SANITIZE_STRING);
$corretor_info_plano = filter_input(INPUT_POST, 'corretor_info_plano',  FILTER_SANITIZE_STRING);
$nota_seu_atendimento = filter_input(INPUT_POST, 'nota_seu_atendimento',  FILTER_SANITIZE_STRING);
$nota_atendimento_vendas = filter_input(INPUT_POST, 'nota_atendimento_vendas',  FILTER_SANITIZE_STRING);


//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_vendas = "INSERT INTO vendas (nome, cadastro_correto, itens_contratuais, informacoes_financeiras, info_numero_carteirinha, canais_digitais, incentivou_canais_digitais, info_canais_digitais, corretor_info_plano, nota_seu_atendimento, nota_atendimento_vendas, created) VALUES ('$nome', '$cadastro_correto', '$itens_contratuais', '$informacoes_financeiras', '$info_numero_carteirinha', '$canais_digitais', '$incentivou_canais_digitais', '$info_canais_digitais', '$corretor_info_plano', '$nota_seu_atendimento','$nota_atendimento_vendas', NOW())";
$resultado_vendas = mysqli_query($conn, $result_vendas );

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Cadastro Efetivado !</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Cadastro não Efetivado !</p>";
	header("Location: index.php");
}
