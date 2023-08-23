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
<body>
    <div class="border border-black" style="background-color: #F8B323; width: 100%;">                
        <p class="h1 my-3 ms-5" style="font-family: 'impactregular'; font-weight: bold; " > SOUTDAH </p>                   
    </div>
    <div class="card my-2" style="width: 80%; height:100%; margin: auto;">        
        <div class="card-body p-0">            
            <div class="container-fluid pe-0">
                <div class="row">
                    <div class="col-xl-6 d-flex justify-content-center">
                        <img class="img-fluid rounded " style=" width:60%" src="/assets/images/bg-left.png">               
                    </div>
                    <div class="col-xl-6 me-0 d-none d-xl-block d-xl-block">    	        
                        <img class="img-fluid rounded float-end" style="width:100%" src="/assets/images/bg-right.png" > 
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-xl-6 ">
                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-3">
                            </div>
                            <div class="col-xl-6">                
                                <p class="h5" style="text-align: center; font-family: 'Montserrat', sans-serif; font-weight: 600">
                                    Para receber sua avaliação é preciso preencher algumas informações necessárias.
                                </p> 
                            </div>
                            <div class="col-xl-3">
                            </div>
                        </div> 
                        <div class="row ">
                            <div class="col-xl-3">
                            </div>                       
                            <div class="col-xl-6 mx-5 d-none d-xl-block d-xl-block" >
                                <img id="img-fluid rounded sticky-bottom" style="width: 60%;" src="/assets/images/bg-bottom-left.png">
                            </div>
                            <div class="col-xl-3">
                            </div>
                        </div>
                    </div>  
                    <div class="col-xl-6 ">                                        
                        <div class="col-xl-10">  
                            <p class="h5" style="text-align: center; font-family: 'Prompt', sans-serif;">Precisamos de algumas informações básicas necessárias para gerar seu resultado final e envia-lo por e-mail, ou, se preferir não receber a avaliação completa com os resultados, pode começar o teste sem informar seus dados! Você receberá na tela a sua avaliação resumida!</p>
                        </div>
                        <div class="col-xl-10"> 
                            <form action="parte2.php" method="post">
                                <div class="mb-3 mt-5">
                                    <input type="submit" class="form-control form-control-lg text-wrap" style="color:white; background-color: #4989C5" value="Quero receber o resultado completo" name="btnquero">
                                </div>
                                <div class="mb-3 mt-5">
                                    <input type="submit" class="form-control form-control-lg text-wrap" style="color:white; background-color: #4989C5" value="Não quero informar meus dados" name="btnquero">
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