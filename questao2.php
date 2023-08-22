<?php 
     session_start();
     $q1 = filter_input(INPUT_POST, 'btnq1');
     $_SESSION["q1"]=$q1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOUTDAH - Questão 02</title>
</head>
<body>
    <div>
        <p>Tem dificuldade para manter a atenção em tarefas ou atividades de lazer.</p>
    </div>
    <form action="questao3.php" method="post">
        <input type="submit" value="Nem um pouco" name="btnq2">
        <input type="submit" value="Só um pouco" name="btnq2">
        <input type="submit" value="Bastante" name="btnq2">
        <input type="submit" value="Demais" name="btnq2">
    </form>
</body>
</html>