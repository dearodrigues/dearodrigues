<?php 
     session_start();
     $q5 = filter_input(INPUT_POST, 'btnq5');
     $_SESSION["q5"]=$q5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOUTDAH - Questão 06</title>
</head>
<body>
    <div>
        <p>Evita, não gosta ou se envolve contra a vontade em tarefas que exigem esforço mental prolongado.</p>
    </div>
    <form action="questao7.php" method="post">
        <input type="submit" value="Nem um pouco" name="btnq6">
        <input type="submit" value="Só um pouco" name="btnq6">
        <input type="submit" value="Bastante" name="btnq6">
        <input type="submit" value="Demais" name="btnq6">
    </form>
</body>
</html>