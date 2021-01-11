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
    <title>Aguardando Desistência - Call Center Integra</title>

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
                    <h2 class="title">Aguardando Desistência - Call Center Integra</h2>
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
                        

                        <div class="col-2">
                                <div class="input-group">
                                    <label class="label"> Nome do Beneficiário </label>
                                    <input class="input--style-4" type="text" name="beneficiario">
                                </div>
                            </div>


                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Cidade</label>
                                    <input class="input--style-4" type="text" name="cidade" >
                                </div>
                            </div>


                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nome do Atendente<span>*</span></label>
                                    <input class="input--style-4" type="text" name="atendente">
                                </div>
                            </div>
                        </div>


                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Telefone</label>
                                    <input class="input--style-4" type="text" name="telefone" >
                                </div>
                            </div>


                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Outros Convênios (Opcional)</label>
                                    <input class="input--style-4" type="text" name="convenio">
                                </div>
                            </div>
                        </div>

                                                
                        <div class="input-group">
                            <label class="label">Especialidade</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="especialidade">
                                    <option disabled="disabled" selected="selected">Selecione a Especialidade:</option>
                                    <option value="ALERGIA E IMUNOLOGIA">ALERGIA E IMUNOLOGIA</option>
                                    <option value="ALERGOLOGIA/IMUNOLOGIA">ALERGOLOGIA/IMUNOLOGIA</option>
                                    <option value="ANGIOLOGIA">ANGIOLOGIA</option>
                                    <option value="CARDIOLOGIA">CARDIOLOGIA</option>
                                    <option value="CIRURGIA DIGESTIVA">CIRURGIA DIGESTIVA</option>
                                    <option value="CIRURGIA DO APARELHO DIGESTIVO">CIRURGIA DO APARELHO DIGESTIVO</option>
                                    <option value="CIRURGIA GERAL">CIRURGIA GERAL</option>
                                    <option value="CLíNICA GERAL">CLíNICA GERAL</option>
                                    <option value="CLINICA MEDICA">CLINICA MEDICA</option>
                                    <option value="DERMATOLOGIA">DERMATOLOGIA</option>
                                    <option value="ENDOCRINOLOGIA">ENDOCRINOLOGIA</option>
                                    <option value="ENDOCRINOLOGIA / METABOLOGIA">ENDOCRINOLOGIA / METABOLOGIA</option>
                                    <option value="ENDOCRINOLOGIA PEDIÁTRICA">ENDOCRINOLOGIA PEDIÁTRICA</option>
                                    <option value="ENDOCRINOLOGISTA PEDIATRICO">ENDOCRINOLOGISTA PEDIATRICO</option>
                                    <option value="GASTROENTEROLOGIA">GASTROENTEROLOGIA</option>
                                    <option value="GASTROENTEROLOGIA - PEDIÁTRICA">GASTROENTEROLOGIA - PEDIÁTRICA</option>
                                    <option value="GASTROENTEROLOGIA INFANTIL">GASTROENTEROLOGIA INFANTIL</option>
                                    <option value="GENETICISTA">GENETICISTA</option>
                                    <option value="GINECOLOGIA">GINECOLOGIA</option>
                                    <option value="GINECOLOGIA / OBSTETRíCIA">GINECOLOGIA / OBSTETRíCIA</option>
                                    <option value="GINECOLOGIA E OBSTETRICIA">GINECOLOGIA E OBSTETRICIA</option>
                                    <option value="HEMATOLOGIA">HEMATOLOGIA</option>
                                    <option value="HEMATOLOGIA E HEMOTERAPIA">HEMATOLOGIA E HEMOTERAPIA</option>
                                    <option value="HOMEOPATIA">HOMEOPATIA</option>
                                    <option value="INFECTOLOGIA">INFECTOLOGIA</option>
                                    <option value="INFECTOLOGIA INFANTIL">INFECTOLOGIA INFANTIL</option>
                                    <option value="MASTOLOGIA">MASTOLOGIA</option>
                                    <option value="MEDICINA DE FAMíLIA E COMUNIDADE">MEDICINA DE FAMíLIA E COMUNIDADE</option>
                                    <option value="NEUROLOGIA">NEUROLOGIA</option>
                                    <option value="NEUROLOGIA - PEDIÁTRICA">NEUROLOGIA - PEDIÁTRICA</option>
                                    <option value="NEUROLOGIA PEDIATRICA">NEUROLOGIA PEDIATRICA</option>
                                    <option value="NUTRICIONISTA">NUTRICIONISTA</option>
                                    <option value="NUTROLOGIA">NUTROLOGIA</option>
                                    <option value="ONCOLOGIA CLINICA">ONCOLOGIA CLINICA</option>
                                    <option value="ORTOPEDIA/COLUNA">ORTOPEDIA/COLUNA</option>
                                    <option value="ORTOPEDIA/JOELHOS">ORTOPEDIA/JOELHOS</option>
                                    <option value="ORTOPEDIA/MAOS">ORTOPEDIA/MAOS</option>
                                    <option value="ORTOPEDIA/OMBROS E COTOV">ORTOPEDIA/OMBROS E COTOV</option>
                                    <option value="ORTOPEDIA/PES E TORNOZELOS">ORTOPEDIA/PES E TORNOZELOS</option>
                                    <option value="ORTOPEDIA/TRAUMATOLOGIA">ORTOPEDIA/TRAUMATOLOGIA</option>
                                    <option value="OTORRINOLARINGOLOGIA">OTORRINOLARINGOLOGIA</option>
                                    <option value="PEDIATRIA">PEDIATRIA</option>
                                    <option value="PNEUMOLOGIA">PNEUMOLOGIA</option>
                                    <option value="PNEUMOLOGIA INFANTIL">PNEUMOLOGIA INFANTIL</option>
                                    <option value="PROCTOLOGIA">PROCTOLOGIA</option>
                                    <option value="PSIQUIATRIA">PSIQUIATRIA</option>
                                    <option value="REUMATOLOGIA">REUMATOLOGIA</option>
                                    <option value="UROLOGIA">UROLOGIA</option>
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