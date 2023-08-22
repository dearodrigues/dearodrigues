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
    <title>SOUTDAH - Vamos começar</title>
</head>
<body>
    <div>
        <p>Vamos iniciar o rastreamento para o TDAH!</p>
        <p>Antes de começar é importante lembrar que as respostas devem ter o máximo de fidelidade quanto aos estímulos e frequência das ocorrências, caso não seja sincero e verdadeiro, poderá afetar diretamente o resultado.</p>
    </div>
    <form action="questao1.php" method="post">
        <input type="submit" value="Vamos começar!" name="btnenviar">
    </form>
</body>
</html>