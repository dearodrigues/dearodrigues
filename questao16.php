<?php 
     session_start();
     $q15 = filter_input(INPUT_POST, 'btnq15');
     $_SESSION["q15"]=$q15;
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
<body>    
    <div class=" border border-black" style="background-color: #F8B323; width: 100%;">                
        <p class="h1 my-3 ms-5" style="font-family: 'impactregular'; font-weight: bold; " > SOUTDAH </p>                   
    </div>    
    <div class="container-fluid">
        <div class="card mt-3 col-lg-6" style="margin: auto;"> 
            <div class="card-body p-0">            
                <div class="container-fluid p-0">
                    <div class="row ">                    
                            <img class="img-fluid position-relative" style="width: 100%" src="/assets/images/bg-perg-16.png">       
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row d-flex justify-content-center">                    
                        <div class="col-md-6 ">
                            <div class="h5 mb-4" style="text-align: center; font-family: 'Prompt', sans-serif; font-weight: bold;">
                                <p>Responde às perguntas de forma precipitada antes que elas tenham sido terminadas.</p>
                            </div>
                            <form action="questao17.php" method="post">
                                <div class="mb-3 mt-2 rounded" style="border:solid 1px; border-color: #3C5BC8">
                                    <input class="form-control form-control-lg "  type="submit" value="Nem um pouco" name="btnq16">
                                </div>
                                <div class="mb-3 mt-2 rounded" style="border:solid 1px; border-color: #3C5BC8">
                                    <input class="form-control form-control-lg" type="submit" value="Só um pouco" name="btnq16">
                                </div>
                                <div class="mb-3 mt-2 rounded" style="border:solid 1px; border-color: #3C5BC8">
                                    <input class="form-control form-control-lg" type="submit" value="Bastante" name="btnq16">
                                </div>
                                <div class="mb-3 my-2 rounded" style="border:solid 1px; border-color: #3C5BC8">
                                    <input class="form-control form-control-lg" type="submit" value="Demais" name="btnq16">
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


