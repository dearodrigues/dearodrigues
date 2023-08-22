<?php 
     session_start();
     $q10 = filter_input(INPUT_POST, 'btnq10');
     $_SESSION["q10"]=$q10;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOUTDAH - Questão 11</title>
</head>
<body>
    <div>
        <p>Sai do lugar na de aula ou em outras situações em que se espera que fique sentado.</p>
    </div>
    <form action="questao12.php" method="post">
        <input type="submit" value="Nem um pouco" name="btnq11">
        <input type="submit" value="Só um pouco" name="btnq11">
        <input type="submit" value="Bastante" name="btnq11">
        <input type="submit" value="Demais" name="btnq11">
    </form>
</body>
</html>