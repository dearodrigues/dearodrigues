<?php 
     session_start();
     $q6 = filter_input(INPUT_POST, 'btnq6');
     $_SESSION["q6"]=$q6;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOUTDAH - Questão 07</title>
</head>
<body>
    <div>
        <p>Perde coisas necessárias para atividades (por exemplo, brinquedos deveres da escola, lápis ou livro).</p>
    </div>
    <form action="questao8.php" method="post">
        <input type="submit" value="Nem um pouco" name="btnq7">
        <input type="submit" value="Só um pouco" name="btnq7">
        <input type="submit" value="Bastante" name="btnq7">
        <input type="submit" value="Demais" name="btnq7">
    </form>
</body>
</html>