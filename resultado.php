<?php 
     session_start();
     $q18 = filter_input(INPUT_POST, 'btnq18');
     $_SESSION["q18"]=$q18;
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
        <p>O resultado foi.</p>
    </div>
    <div>
        <p>
            <?php 
              echo "Nome: ".$_SESSION["nome"]." <br>";
              echo "Q1 - ".$_SESSION["q1"]." <br>";
              echo "Q2 - ".$_SESSION["q2"]." <br>";
              echo "Q3 - ".$_SESSION["q3"]." <br>";
              echo "Q4 - ".$_SESSION["q4"]." <br>";
              echo "Q5 - ".$_SESSION["q5"]." <br>";
              echo "Q6 - ".$_SESSION["q6"]." <br>";
              echo "Q7 - ".$_SESSION["q7"]." <br>";
              echo "Q8 - ".$_SESSION["q8"]." <br>";
              echo "Q9 - ".$_SESSION["q9"]." <br>";
              echo "Q10 - ".$_SESSION["q10"]." <br>";
              echo "Q11 - ".$_SESSION["q11"]." <br>";
              echo "Q12 - ".$_SESSION["q12"]." <br>";
              echo "Q13 - ".$_SESSION["q13"]." <br>";
              echo "Q14 - ".$_SESSION["q14"]." <br>";
              echo "Q15 - ".$_SESSION["q15"]." <br>";
              echo "Q16 - ".$_SESSION["q16"]." <br>";
              echo "Q17 - ".$_SESSION["q17"]." <br>";
              echo "Q18 - ".$_SESSION["q18"]." <br>";
            ?></p>
    </div>
</body>
</html>