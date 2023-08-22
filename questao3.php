<?php 
     session_start();
     $q2 = filter_input(INPUT_POST, 'btnq2');
     $_SESSION["q2"]=$q2;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOUTDAH - Questão 03</title>
</head>
<body>
    <div>
        <p>Parece não estar ouvindo quando se fala diretamente com ele.</p>
    </div>
    <form action="questao4.php" method="post">
        <input type="submit" value="Nem um pouco" name="btnq3">
        <input type="submit" value="Só um pouco" name="btnq3">
        <input type="submit" value="Bastante" name="btnq3">
        <input type="submit" value="Demais" name="btnq3">
    </form>
</body>
</html>