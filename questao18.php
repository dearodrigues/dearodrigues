<?php 
     session_start();
     $q17 = filter_input(INPUT_POST, 'btnq17');
     $_SESSION["q17"]=$q17;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOUTDAH - Questão 18</title>
</head>
<body>
    <div>
        <p>Interrompe os outros ou se intromete (por exemplo, intromete-se em conversas/jogos).</p>
    </div>
    <form action="resultado.php" method="post">
        <input type="submit" value="Nem um pouco" name="btnq18">
        <input type="submit" value="Só um pouco" name="btnq18">
        <input type="submit" value="Bastante" name="btnq18">
        <input type="submit" value="Demais" name="btnq18">
    </form>
</body>
</html>