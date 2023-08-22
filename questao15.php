<?php 
     session_start();
     $q14 = filter_input(INPUT_POST, 'btnq14');
     $_SESSION["q14"]=$q14;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOUTDAH - Questão 15</title>
</head>
<body>
    <div>
        <p>Fala em excesso.</p>
    </div>
    <form action="questao16.php" method="post">
        <input type="submit" value="Nem um pouco" name="btnq15">
        <input type="submit" value="Só um pouco" name="btnq15">
        <input type="submit" value="Bastante" name="btnq15">
        <input type="submit" value="Demais" name="btnq15">
    </form>
</body>
</html>