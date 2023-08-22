<?php 
     session_start();
     $q9 = filter_input(INPUT_POST, 'btnq9');
     $_SESSION["q9"]=$q9;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOUTDAH - Questão 10</title>
</head>
<body>
    <div>
        <p>Mexe com as mãos ou os pés ou se remexe na cadeira.</p>
    </div>
    <form action="questao11.php" method="post">
        <input type="submit" value="Nem um pouco" name="btnq10">
        <input type="submit" value="Só um pouco" name="btnq10">
        <input type="submit" value="Bastante" name="btnq10">
        <input type="submit" value="Demais" name="btnq10">
    </form>
</body>
</html>