<?php 
     session_start();
     $q13 = filter_input(INPUT_POST, 'btnq13');
     $_SESSION["q13"]=$q13;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOUTDAH - Questão 14</title>
</head>
<body>
    <div>
        <p>Não para ou costuma estar a “mil por hora”.</p>
    </div>
    <form action="questao15.php" method="post">
        <input type="submit" value="Nem um pouco" name="btnq14">
        <input type="submit" value="Só um pouco" name="btnq14">
        <input type="submit" value="Bastante" name="btnq14">
        <input type="submit" value="Demais" name="btnq14">
    </form>
</body>
</html>