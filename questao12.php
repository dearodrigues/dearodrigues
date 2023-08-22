<?php 
     session_start();
     $q11 = filter_input(INPUT_POST, 'btnq11');
     $_SESSION["q11"]=$q11;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOUTDAH - Questão 12</title>
</head>
<body>
    <div>
        <p>Corre de um lado para o outro ou sobe nas mobílias em situações em que isso é inapropriado.</p>
    </div>
    <form action="questao13.php" method="post">
        <input type="submit" value="Nem um pouco" name="btnq12">
        <input type="submit" value="Só um pouco" name="btnq12">
        <input type="submit" value="Bastante" name="btnq12">
        <input type="submit" value="Demais" name="btnq12">
    </form>
</body>
</html>