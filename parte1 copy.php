<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOUTDAH - Escolha como deseja continuar</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="text-bg-warning p-3">
        <div id="title"> SOUTDAH </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col ms-5">
    	        <img class="img-fluid rounded float-start" style="margin-left: 20%" src="/assets/images/bg-left.png">               
            </div>
            <div class="col">    	        
                <img class="img-fluid rounded float-end" style="width: 80%;" src="/assets/images/bg-right.png" > 
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row ">
            <div class="col float-start">   
            <p id="text-info">
            Para receber sua avaliação é preciso preencher algumas informações necessárias.
        </p>
        <img id="bottom-left" src="/assets/images/bg-bottom-left.png">
            </div>  
            <div class="col float-end">   
                <p class="h4">Precisamos de algumas informações básicas necessárias para gerar seu resultado final e envia-lo por e-mail, ou, se preferir não receber a avaliação completa com os resultados, pode começar o teste sem informar seus dados! Você receberá na tela a sua avaliação resumida!</p>
                <form action="parte2.php" method="post">
                    <input type="submit" value="Quero receber o resultado completo" name="btnquero">
                    <input type="submit" value="Não quero informar meus dados" name="btnquero">
                </form>
            </div>   
        </div>        
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>