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
    <title>Envio de Boletos</title>

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
                    <h2 class="title">Envios de Boletos - Call Center Integra </h2>
                    <?php
						if(isset($_SESSION['msg'])){
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						}
						?>
                    <form id="contactForm" method="POST" action="processa.php">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">CPF(Responsável Financeiro)<span>*</span></label>
                                    <input class="input--style-4" type="text" name="cpf">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Matrícula do Beneficiário<span>*</span></label>
                                    <input class="input--style-4" type="text" name="matricula">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <!--  <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>--->
                           
                            <!--   <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Retirada Juros e Multa</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Sim
                                            <input type="radio" checked="checked" name="sim">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Não
                                            <input type="radio" name="nao">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>    -->   
                        
                            <div class="input-group">
                                <label class="label">Retirada JUROS e MULTA</label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="retirada">
                                        <option disabled="disabled" selected="selected">Selecione:</option>
                                        <option value="sim">SIM</option>
                                        <option value="nao">NÃO</option>
                        
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div> 
                            </div>    

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"> Nome do Beneficiário </label>
                                    <input class="input--style-4" type="text" name="beneficiario">
                                </div>
                            </div>

                        </div>

                        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email (Se diferente)</label>
                                    <input class="input--style-4" type="email" name="email" >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nome do Atendente<span>*</span></label>
                                    <input class="input--style-4" type="text" name="atendente">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Mês</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="mes">
                                    <option disabled="disabled" selected="selected">Selecione o mês:</option>
                                    <option value="janeiro">Janeiro</option>
									<option value="fevereiro">Fevereiro</option>
									<option value="marco">Março</option>
									<option value="abril">Abril</option>
									<option value="maio">Maio</option>
									<option value="junho">Junho</option>
									<option value="julho">Julho</option>
									<option value="agosto">Agosto</option>
									<option value="setembro">Setembro</option>
									<option value="outubro">Outubro</option>
									<option value="novembro">Novembro</option>
									<option value="dezembro">Dezembro</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>


                        <div class="input-group">
                            <label class="label">Operadora</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="operadora">
                                    <option disabled="disabled" selected="selected">Selecione a operadora:</option>
                                    <option value="humana">HUMANA</option>
								    <option value="medplan">MEDPLAN</option>
								    <option value="samp">SAMP</option>
								    <option value="sta-rita-saude">SANTA RITA SAÚDE</option>
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