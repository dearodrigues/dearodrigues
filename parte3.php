<?php 
     $nome = filter_input(INPUT_POST, 'txtnome');
     $dtnascimento = filter_input(INPUT_POST, 'txtdtnascimento');
     $email = filter_input(INPUT_POST, 'txtemail');
     $cidade = filter_input(INPUT_POST, 'txtcidade');
     $uf = filter_input(INPUT_POST, 'txtuf');
     $escola = filter_input(INPUT_POST, 'txtescola');
     $serie = filter_input(INPUT_POST, 'txtserie');

     session_start();
     $_SESSION["nome"]=$nome;
     $_SESSION["dtnascimento"]=$dtnascimento;
     $_SESSION["email"]=$email;
     $_SESSION["cidade"]=$cidade;
     $_SESSION["uf"]=$uf;
     $_SESSION["escola"]=$escola;
     $_SESSION["serie"]=$serie;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOUTDAH - Escolha como deseja continuar</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="/assets/css/soutdah.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="border border-black" style="background-color: #F8B323; width: 100%;">
        <p class="h1 my-3 ms-5" style="font-family: 'impactregular'; font-weight: bold; "> SOUTDAH </p>
    </div>
    <div class="card my-2 col-lg-6" style=" margin: auto;">
        <div class="card-body p-0">
            <div class="container-fluid pe-0">
                <div class="row">
                    <div class="col-xl-12 ps-0">
                        <img class="img-fluid rounded " src="/assets/images/bg-parte-3.png">
                    </div>
                    <div class="row">
                        <div class="col-xl-3">
                        </div>
                        <div class="col-xl-6">
                            <p class="h5"
                                style="text-align: center; font-family: 'Montserrat', sans-serif; font-weight: 600">
                                Vamos iniciar o rastreamento para o TDAH!
                            </p>
                            <p style="text-align: center; font-family: 'Prompt', sans-serif;">
                            Antes de começar é importante lembrar que as respostas devem ter o máximo de fidelidade quanto aos estímulos e frequência das ocorrências, caso não seja sincero e verdadeiro, poderá afetar diretamente o resultado.
                            </p>
                        </div>
                        <div class="col-xl-3">
                        </div>
                    </div>
                    <div class="col-sm-6 m-auto my-5">
                    <form action="questao1.php" method="post">
                        <input type="submit" class="form-control form-control-lg text-wrap" style="color:white; background-color: #4989C5" value="Vamos começar!" name="btnenviar">
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>