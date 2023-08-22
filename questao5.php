<?php 
     session_start();
     $q4 = filter_input(INPUT_POST, 'btnq4');
     $_SESSION["q4"]=$q4;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOUTDAH - Questão 05</title>
</head>
<body>
    <div>
        <p>Tem dificuldade para organizar tarefas e atividades.</p>
    </div>
    <form action="questao6.php" method="post">
        <input type="submit" value="Nem um pouco" name="btnq5">
        <input type="submit" value="Só um pouco" name="btnq5">
        <input type="submit" value="Bastante" name="btnq5">
        <input type="submit" value="Demais" name="btnq5">
    </form>
</body>
</html>