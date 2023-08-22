<?php 
     session_start();
     $q3 = filter_input(INPUT_POST, 'btnq3');
     $_SESSION["q3"]=$q3;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOUTDAH - Questão 04</title>
</head>
<body>
    <div>
        <p>Não segue instruções até o fim e não termina deveres de escola, tarefas e obrigações.</p>
    </div>
    <form action="questao5.php" method="post">
        <input type="submit" value="Nem um pouco" name="btnq4">
        <input type="submit" value="Só um pouco" name="btnq4">
        <input type="submit" value="Bastante" name="btnq4">
        <input type="submit" value="Demais" name="btnq4">
    </form>
</body>
</html>