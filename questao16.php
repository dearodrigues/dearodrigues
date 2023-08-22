<?php 
     session_start();
     $q15 = filter_input(INPUT_POST, 'btnq15');
     $_SESSION["q15"]=$q15;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOUTDAH - Questão 16</title>
</head>
<body>
    <div>
        <p>Responde às perguntas de forma precipitada antes que elas tenham sido terminadas.</p>
    </div>
    <form action="questao17.php" method="post">
        <input type="submit" value="Nem um pouco" name="btnq16">
        <input type="submit" value="Só um pouco" name="btnq16">
        <input type="submit" value="Bastante" name="btnq16">
        <input type="submit" value="Demais" name="btnq16">
    </form>
</body>
</html>