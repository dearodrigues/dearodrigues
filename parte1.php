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
                        <img class="img-fluid rounded float-end" style="width:80%" src="/assets/images/bg-right.png" > 
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
                                <p class="h5" style="text-align: center; font-family: 'Montserrat', sans-serif; font-weight: 600">
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
                    <div class="col-md-6">                                        
                        <div class="col-md-8">  
                            <p class="h5" style="text-align: center; font-family: 'Prompt', sans-serif;">Precisamos de algumas informações básicas necessárias para gerar seu resultado final e envia-lo por e-mail, ou, se preferir não receber a avaliação completa com os resultados, pode começar o teste sem informar seus dados! Você receberá na tela a sua avaliação resumida!</p>
                        </div>
                        <div class="col-md-8"> 
                            <form action="parte2.php" method="post">
                                <div class="mb-3 mt-5">
                                    <input type="submit" class="form-control form-control-lg" style="color:white; background-color: #4989C5" value="Quero receber o resultado completo" name="btnquero">
                                </div>
                                <div class="mb-3 mt-5">
                                    <input type="submit" class="form-control form-control-lg" style="color:white; background-color: #4989C5" value="Não quero informar meus dados" name="btnquero">
                                </div>
                            </form>
                        </div>
                    </div>   
                </div>        
            </div>
        </div>
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>