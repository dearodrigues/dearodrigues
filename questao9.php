<?php 
     session_start();
     $q8 = filter_input(INPUT_POST, 'btnq8');
     $_SESSION["q8"]=$q8;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOUTDAH - Questão 09</title>
</head>
<body>
    <div>
        <p>É esquecido em atividades do dia a dia.</p>
    </div>
    <form action="questao10.php" method="post">
        <input type="submit" value="Nem um pouco" name="btnq9">
        <input type="submit" value="Só um pouco" name="btnq9">
        <input type="submit" value="Bastante" name="btnq9">
        <input type="submit" value="Demais" name="btnq9">
    </form>
</body>
</html>