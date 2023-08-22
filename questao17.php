<?php 
     session_start();
     $q16 = filter_input(INPUT_POST, 'btnq16');
     $_SESSION["q16"]=$q16;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOUTDAH - Questão 17</title>
</head>
<body>
    <div>
        <p>Tem dificuldade para esperar sua vez.</p>
    </div>
    <form action="questao18.php" method="post">
        <input type="submit" value="Nem um pouco" name="btnq17">
        <input type="submit" value="Só um pouco" name="btnq17">
        <input type="submit" value="Bastante" name="btnq17">
        <input type="submit" value="Demais" name="btnq17">
    </form>
</body>
</html>