<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Title Page-->
    <title>Fale conosco</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <a href="http://localhost:8001/">
        <div class="w3-center" style="min-height:20px">
        <p class="logot">
        <a href="http://localhost:8001/">
            <img src="https://secureservercdn.net/45.40.152.13/g8g.8af.myftpupload.com/wp-content/themes/athena/_assets/images/logo.png" alt="LogoAthena">
        </a>
        </p>
            <br></br>
              <div class="w3-padding-15">
            </div>
        </div>
        <div class="wrapper wrapper--w680">

            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Fale Conosco - Call Center Integra </h2>
                    <?php
						if(isset($_SESSION['msg'])){
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						}
						?>
                    <form id="contactForm" method="POST" action="processa.php">

                    <div class="input-group">
                            <label class="label">Operadora</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="operadora">
                                    <option disabled="disabled" selected="selected">Selecione a operadora:</option>
                                    <option value="HUMANA">HUMANA</option>
								    <option value="MEDPLAN">MEDPLAN</option>
								    <option value="SAMP">SAMP</option>
                                    
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                                    <label class="label">Beneficiário<span>*</span></label>
                                    <input class="input--style-4" type="text"  name="beneficiario">
                         </div>
      
                         

                        <div class="row row-space">
                            <div class="col-2">
                            <div class="input-group">
                            <label class="label">Status da Solicitação</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="status_solicitacao">
                                    <option disabled="disabled" selected="selected">Selecione:</option>
                                    <option value="ENCAMINHADO PARA SETOR RESPONSÁVEL">ENCAMINHADO PARA SETOR RESPONSÁVEL</option>
								    <option value="RESOLVIDA">RESOLVIDA</option>
                                    
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Data Solicitação<span>*</span></label>
                                    <input class="input--style-4" type="text"placeholder="Ex: 01/01/2020" name="data_solicitacao">
                                </div>
                            </div>
                        </div>

                      

                        <div class="row row-space">
                            <div class="col-2">
                            <div class="input-group">
                            <label class="label">Encaminhada Solicitação</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="encaminhada_solicitacao">
                                    <option disabled="disabled" selected="selected">Selecione:</option>
                                    <option value="AUTORIZACAO@HUMANASAUDE">AUTORIZACAO@HUMANASAUDE</option>
								    <option value="CONTAS A RECEBER">CONTAS A RECEBER</option>
                                    <option value="CPD">CPD</option>
                                    <option value="FIDELIZAÇÃO">FIDELIZAÇÃO</option>
								    <option value="FINANCEIRO">FINANCEIRO</option>
                                    <option value="JURÍDICO">JURÍDICO</option>
                                    <option value="SAC">SAC</option>
								    <option value="SACE">SACE</option>
                                    <option value="FALE CONOSCO">FALE CONOSCO</option>
                                    <option value="ENCAMINHAMENTO/AUTORIZADOR">ENCAMINHAMENTO/AUTORIZADOR</option>
								    <option value="CREDENCIAMENTO">CREDENCIAMENTO</option>
                                    <option value="CENTRAL DE MARCAÇÃO">CENTRAL DE MARCAÇÃO</option>
                                    <option value="CADASTRO">CADASTRO</option>
                                    <option value="AUTORIZAÇÃO">AUTORIZAÇÃO</option>
                                    <option value="PÓS VENDAS">PÓS VENDAS</option>
                                    
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                             </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Data da Abertura<span>*</span></label>
                                    <input class="input--style-4" type="text" placeholder="Ex: 01/01/2020" name="data_abertura">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                            <label class="label">Solicitação</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="solicitacao">
                                    <option disabled="disabled" selected="selected">Selecione:</option>
                                    <option value="2º via carteira">2º via carteira</option>
								    <option value="2° via de protosta">2° via de protosta</option>
                                    <option value="Alteração Cadastral">Alteração Cadastral</option>
                                    <option value="Alteração de vencimento">Alteração de vencimento</option>
								    <option value="Atendimento Eletivo/Plano Cancelado">Atendimento Eletivo/Plano Cancelado</option>
                                    <option value="Autorização">Autorização</option>
                                    <option value="Baixa de Pagamento">Baixa de Pagamento</option>
								    <option value="Boleto">Boleto</option>
                                    <option value="Cancelamento do Contrato">Cancelamento do Contrato</option>
                                    <option value="Cancelamento do Plano">Cancelamento do Plano</option>
								    <option value="Carência/Autorização">Carência/Autorização</option>
                                    <option value="Cobertura Contratual">Cobertura Contratual</option>
                                    <option value="Comprovante de Pagamento">Comprovante de Pagamento</option>
                                    <option value="Confirmação de Adesão do Plano">Confirmação de Adesão do Plano</option>
                                    <option value="Confirmação de Pagamento">Confirmação de Pagamento</option>
                                    <option value="Consulta">Consulta</option>
                                    <option value="Cópia Contrato">Cópia Contrato</option>
                                    <option value="Declaração de Adiplência">Declaração de Adiplência</option>
                                    <option value="Erro no Boleto">Erro no Boleto</option>
                                    <option value="Informações Matricula">Informações Matricula</option>
                                    <option value="Informações Sobre Cancelamento">Informações Sobre Cancelamento</option>
                                    <option value="Isenção de Digital">Isenção de Digital</option>
                                    <option value="Matrícula">Matrícula</option>
                                    <option value="Mudança de Modalidade">Mudança de Modalidade</option>
                                    <option value="Mudança de Responsável">Mudança de Responsável</option>
                                    <option value="Mudança de Vencimento">Mudança de Vencimento</option>
                                    <option value="Negociação de Mensalidades">Negociação de Mensalidades</option>
                                    <option value="Pagamento Duplicidade">Pagamento Duplicidade</option>
                                    <option value="Pagamento Errado">Pagamento Errado</option>
                                    <option value="Pagamento Intercalado">Pagamento Intercalado</option>
                                    <option value="Pagamento Plano Cancelado">Pagamento Plano Cancelado</option>
                                    <option value="Plano Continuidade">Plano Continuidade</option>
                                    <option value="Plano Individual">Plano Individual</option>
                                    <option value="Reativação do Contrato">Reativação do Contrato</option>
                                    <option value="Reativação do Plano">Reativação do Plano</option>
                                    <option value="Recebimento da Carteira">Recebimento da Carteira</option>
                                    <option value="Reclamação">Reclamação</option>
                                    <option value="Reclamação Demora de Liberação de Exame">Reclamação Demora de Liberação de Exame</option>
                                    <option value="Reclamação/Cancelamento do Contrato">Reclamação/Cancelamento do Contrato</option>
                                    <option value="Reclamação/Gravação">Reclamação/Gravação</option>
                                    <option value="Reclamação-Negativa">Reclamação-Negativa</option>
                                    <option value="Rede Credenciamento">Rede Credenciamento</option>
                                    <option value="Ressarcimento e Desconto">Ressarcimento e Desconto</option>
                                    <option value="Retorno jurídico Sobre Negativa  de Processo">Retorno jurídico Sobre Negativa  de Processo</option>
                                    <option value="Vendas">Vendas</option>
                                    <option value="Elogios">Elogios</option>
                                    <option value="Demonstrativo de Imposto de Renda">Demonstrativo de Imposto de Renda</option>
                                    <option value="Declaração de Portabilidade">Declaração de Portabilidade</option>
                                    <option value="Redefinir senha app/não consegue acessar">Redefinir senha app/não consegue acessar</option>
                                    <option value="Credenciamento">Credenciamento</option>
                                    <option value="Trabalhe Conosco-Envio Curriculo<">Trabalhe Conosco-Envio Curriculo</option>
                                    <option value="Inclusão RN">Inclusão RN</option>
                                    <option value="Outros">Outros</option>
                                    <option value="Reajuste">Reajuste</option>


                                    
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                            </div>

                        </div>

                        <div class="input-group">
                            <label class="label">Sub-Motivo (Autorização)</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="sub_autorizacao">
                                    <option disabled="disabled" selected="selected">Selecione:</option>
                                    <option value="Solicitação de Autorização">Solicitação de Autorização</option>
								    <option value="Informação de Autorização">Informação de Autorização</option>
                                    <option value="Negativa de Autorização">Negativa de Autorização</option>
                                    <option value="Status de Autorização Já Solicitada">Status de Autorização Já Solicitada</option>
								    <option value="Alteração de Prestador">Alteração de Prestador</option>
                                    <option value="Cancelamento de Guia">Cancelamento de Guia</option>
                                    <option value="NÃO SE APLICA">NÃO SE APLICA</option>
                                    
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        
                        <div class="input-group">
                            <label class="label">Sub-Motivo (Ressarcimento)</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="sub_ressarcimento">
                                    <option disabled="disabled" selected="selected">Selecione:</option>
                                    <option value="Consulta">Consulta</option>
								    <option value="Exames">Exames</option>
                                    <option value="Sessões">Sessões</option>
                                    <option value="NÃO SE APLICA">NÃO SE APLICA</option>
								    
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <label class="label">Sub-Motivo (Alteração Cadastral)</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="sub_alt_cadastral">
                                    <option disabled="disabled" selected="selected">Selecione:</option>
                                    <option value="Nome">Nome</option>
								    <option value="Endereço">Endereço</option>
                                    <option value="Email">Email</option>
                                    <option value="Telefone">Telefone</option>
                                    <option value="Data de Nascimento">Data de Nascimento</option>
								    <option value="CPF">CPF</option>
                                    <option value="RG">RG</option>
                                    <option value="Filiação">Filiação</option>
                                    <option value="NÃO SE APLICA">NÃO SE APLICA</option>
								    
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <label class="label">Sub-Motivo (Cobertura Contratual)</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="sub_cobertura_contratual">
                                    <option disabled="disabled" selected="selected">Selecione:</option>
                                    <option value="Informação de Carência">Informação de Carência</option>
								    <option value="Cobertura de Procedimento">Cobertura de Procedimento</option>
                                    <option value="NÃO SE APLICA">NÃO SE APLICA</option>
								    
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <label class="label">Sub-Motivo (Vendas)</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="sub_vendas">
                                    <option disabled="disabled" selected="selected">Selecione:</option>
                                    <option value="Adesão de plano">Adesão de plano</option>
                                    <option value="Valores de plano">Valores de plano</option>
                                    <option value="Aquisição">Aquisição</option>
                                    <option value="NÃO SE APLICA">NÃO SE APLICA</option>
								    
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                                    <label class="label">Outos: </label>
                                    <input class="input--style-4" type="text" name="sub_outros">
                         </div>



                       

                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->