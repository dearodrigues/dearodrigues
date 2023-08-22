<?php 
     session_start();
     $q7 = filter_input(INPUT_POST, 'btnq7');
     $_SESSION["q7"]=$q7;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOUTDAH - Questão 08</title>
</head>
<body>
    <div>
        <p>Distrai-se com estímulos externos.</p>
    </div>
    <form action="questao9.php" method="post">
        <input type="submit" value="Nem um pouco" name="btnq8">
        <input type="submit" value="Só um pouco" name="btnq8">
        <input type="submit" value="Bastante" name="btnq8">
        <input type="submit" value="Demais" name="btnq8">
    </form>
</body>
</html>