<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags-->
    <meta charset="utf8mb4_general_ci">
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
    <title>Tabulador de Vendas - Call Center Integra</title>

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
                    <h2 class="title">Tabulador de Vendas - Call Center Integra</h2>
                    <?php
						if(isset($_SESSION['msg'])){
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						}
						?>
                    <form id="contactForm" method="POST" action="processa.php">

             
                        <div class="row row-space">
                            
                                <div class="input-group">
                                    <label class="label">Nome<span>*</span></label>
                                    <input class="input--style-4" type="text" name="nome">
                                </div>
                        </div> 

                        <div class="input-group">
                            <label class="label">Dados cadastro Corretos?</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="cadastro_correto">
                                    <option disabled="disabled" selected="selected">Selecione :</option>
                                    <option value="sim">SIM</option>
                                    <option value="não(cpf)">NÃO(CPF)</option>
                                    <option value="não(nome)">NÃO(Nome)</option>
                                    <option value="não(data de nascimento)">NÃO(Data de Nascimento)</option>
                                    <option value="não(sexo)">NÃO(Sexo)</option>
                                    <option value="não(telefone)">NÃO(Telefone)</option>
                                    <option value="não(e-mail)">NÃO(E-mail)</option>
                                    
                                </select>
                                <div class="select-dropdown"></div>

                    
                            </div>
                        </div>




                        <div class="input-group">
                            <label class="label">Itens Contratuais Corretos ?</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="itens_contratuais">
                                    <option disabled="disabled" selected="selected">Selecione :</option>
                                    <option value="sim">SIM</option>
                                    <option value="Cobertura">NÃO(Cobertura)</option>
                                    <option value="Carência">NÃO(Carência)</option>
                                    <option value="Credenciamento">NÃO(Rede Credenciada)</option>
                                    
                                </select>
                                <div class="select-dropdown"></div>

                    
                            </div>
                        </div>


                        <div class="input-group">
                            <label class="label">Informações Financeiras Corretas ?</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="informacoes_financeiras">
                                    <option disabled="disabled" selected="selected">Selecione :</option>
                                    <option value="sim">SIM</option>
                                    <option value="não(valor da mensalidade incorreto)">NÃO(Valor da Mensalidade Incorreto)</option>
                                    <option value="não(vencimento da mensalidade incorreto)">NÃO(Vencimento da Mensalidade Incorreto)</option>
                                    <option value="não(não recebimento do boleto de adesão)">NÃO(Não Recebimento do Boleto de Adesão)</option>
                                    
                                </select>
                                <div class="select-dropdown"></div>

                    
                            </div>
                        </div>




                        <div class="input-group">
                            <label class="label">Informou número da carteirinha?</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="info_numero_carteirinha">
                                    <option disabled="disabled" selected="selected">Selecione :</option>
                                    <option value="sim">SIM</option>
                                    <option value="não">NÃO</option>
                                    
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>




                        <div class="input-group">
                            <label class="label">Realizou Cadastro nos canais digitais?</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="canais_digitais">
                                    <option disabled="disabled" selected="selected">Selecione :</option>
                                    <option value="sim">SIM</option>
                                    <option value="não(conexa)">NÃO(Conexa)</option>
                                    <option value="não(samp clientes)">NÃO(Samp Clientes)</option>
                                    <option value="não(samp bios)">NÃO(Samp Bios)</option>
                                    <option value="não(área logada)">NÃO(Área logada)</option>
                                   
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>


                        <div class="input-group">
                            <label class="label">Incentivou o cliente a se cadastrar nos canais digitais?</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="incentivou_canais_digitais">
                                    <option disabled="disabled" selected="selected">Selecione :</option>
                                    <option value="sim">SIM</option>
                                    <option value="não">NÃO</option>
                                    
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>



                        <div class="input-group">
                            <label class="label">Informou o cliente sobre os serviços por canais?</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="info_canais_digitais">
                                    <option disabled="disabled" selected="selected">Selecione :</option>
                                    <option value="agendamento de telemedicina via conexa saúde">Agendamento de telemedicina via conexa saúde</option>
                                    <option value="agendamento de consulta presencial via app e telefone">Agendamento de consulta presencial via app e telefone</option>
                                    <option value="autorização via app, site ou presencial">Autorização via app, site ou presencial</option>
                                    <option value="carteirinha virtual no app">Carteirinha virtual no app</option>
                                    <option value="atualização cadastral via app e site">Atualização cadastral via app e site</option>
                                    <option value="segunda via de boleto pelo app, site e área logada">Segunda via de boleto pelo app, site e área logada</option>
                                    <option value="declarações de IRPF e IRPJ">Declarações de IRPF e IRPJ</option>
                                    
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>


                        <div class="input-group">
                            <label class="label">Corretor repassou todas as informações do plano?</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="corretor_info_plano">
                                    <option disabled="disabled" selected="selected">Selecione :</option>
                                    <option value="rede credenciada">Rede Credenciada</option>
                                    <option value="canais">Canais</option>
                                    <option value="informações de canais digitais">Informações de canais Digitais</option>
                                    <option value="coberturas">Coberturas</option>
                                    <option value="carências">Carências</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>



                        <div class="input-group">
                            <label class="label">Em uma escala de 0 a 10, questione o cliente qual nota ele dá para seu atendimento</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="nota_seu_atendimento">
                                    <option disabled="disabled" selected="selected">Selecione :</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>


                        

                        <div class="input-group">
                            <label class="label">Em uma escala de 0 a 10, questione o cliente qual nota ele dá para o atendimento de vendas (corretor)</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="nota_atendimento_vendas">
                                    <option disabled="disabled" selected="selected">Selecione :</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
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