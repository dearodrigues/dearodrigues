<?php 
     $opcao = filter_input(INPUT_POST, 'btnquero');
     session_start();
     if ($opcao == "Não quero informar meus dados"){
        $_SESSION["informa"]='0';
        header("Location: parte3.php");
        exit();
     }else{
        $_SESSION["informa"]='1';
     }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOUTDAH - Escolha como deseja continuar</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="/assets/css/soutdah.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body style="overflow: hidden">
    <div class="row p-0  border border-black" style="background-color: #F8B323">                
        <p class="h1 my-3 ms-5" style="font-family: 'impactregular'; font-weight: bold; " > SOUTDAH </p>                   
    </div>
    <div class="card " style="width: 80%; height:100%; margin: auto;">        
        <div class="card-body p-0">            
            <div class="container-fluid pe-0">
                <div class="row">
                    <div class="col-md-4 pe-0">
                        <img class="img-fluid rounded float-start" style="margin-left: 30%; width:90%" src="/assets/images/bg-left.png">               
                    </div>
                    <div class="col-md-8 me-0 ">    	        
                        <img class="img-fluid rounded float-end" style="width:80%; position:z-index: 2" src="/assets/images/bg-right.png" > 
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-6 ">
                        <div class="row">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-6 ms-auto">                
                                <p class="h5" style="text-align: center; font-family: 'Montserrat', sans-serif; font-weight: 600; z-index:1;">
                                    Para receber sua avaliação é preciso preencher algumas informações necessárias.
                                </p> 
                            </div>
                            <div class="col-md-3">
                            </div>
                        </div>                        
                        <div class="d-flex justify-content-center" >
                            <img id="img-fluid rounded" style="width: 40%;" src="/assets/images/bg-bottom-left.png">
                        </div>
                    </div>  
                    <div class="col-md-6 pe-3 ps-0" style="margin-top: -22%; z-index: 0">
                    <form action="parte3.php" method="post">
                            <div class="card col-md-11 m-3 float-start"> 
                                <div class="card-body m-2">                           
                                    <label class="form-label" for="txtnome">Nome Completo</label><br>
                                    <input class="form-control form-control-sm" type="text" name="txtnome" id="txtnome" maxlength="50" required><br>
                                    <label class="form-label" for="txtdtnascimento">Data de Nascimento</label><br>
                                    <input class="form-control form-control-sm" type="date" name="txtdtnascimento" id="txtdtnascimento" required><br>
                                    <label class="form-label" for="txtemail">E-mail</label><br>
                                    <input class="form-control form-control-sm" type="email" name="txtemail" id="txtemail" maxlength="150" required><br>
                                    <label class="form-label" for="txtcidade">Cidade</label><br>
                                    <input class="form-control form-control-sm" type="text" name="txtcidade" id="txtcidade" maxlength="150"><br>
                                    <label class="form-label" for="txtuf">UF</label><br>
                                    <select class="form-control form-control-sm" name="txtuf" id="txtuf" required><br>
                                        <option value="">Selecione</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espirito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                    </select><br>
                                    <label class="form-label" for="txtescola">Escola</label><br>
                                    <input class="form-control form-control-sm" type="text" name="txtescola" id="txtescola" maxlength="50" required><br>
                                    <label class="form-label" for="txtserie">Série</label><br>
                                    <input class="form-control form-control-sm" type="text" name="txtserie" id="txtserie" maxlength="50" required><br>
                                </div>
                            </div>
                            <div class="mb-3 mt-2 me-5 float-end">
                                <input class="form-control form-control-lg" style="color:white; background-color: #4989C5" type="submit" value="Enviar informações" name="btnenviar">
                            </div> 
                        </form>
                    </div>   
                </div>        
            </div>
        </div>
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

