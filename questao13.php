<?php 
     session_start();
     $q12 = filter_input(INPUT_POST, 'btnq12');
     $_SESSION["q12"]=$q12;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOUTDAH - Questão 13</title>
</head>
<body>
    <div>
        <p>Tem dificuldade para brincar ou envolver-se em atividades de lazer de forma calma.</p>
    </div>
    <form action="questao14.php" method="post">
        <input type="submit" value="Nem um pouco" name="btnq13">
        <input type="submit" value="Só um pouco" name="btnq13">
        <input type="submit" value="Bastante" name="btnq13">
        <input type="submit" value="Demais" name="btnq13">
    </form>
</body>
</html>