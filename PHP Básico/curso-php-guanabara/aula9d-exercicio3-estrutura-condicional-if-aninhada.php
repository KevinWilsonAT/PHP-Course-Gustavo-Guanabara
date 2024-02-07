<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Condicional If Aninhada - Exercício 3 (Parte PHP)</title>
</head>
<body>
<div>
    <?php
        $r1 = $_GET["r1"];
        $r2 = $_GET["r2"];
        $avg = ($r1 + $r2) / 2 ;

        if($avg < 5){
            $sit = "REPROVED.";
        }
        elseif(($avg >= 5) && ($avg < 7)){
            $sit = "in CATCH UP.";
        }
        else {
            $sit = "APPROVED";
        }

        echo "The average between $r1 and $r2 is $avg.<br>";
        echo "Student situation: $sit";
        echo "<br><br><a href='aula9d-exercicio3-estrutura-condicional-if-aninhada.html'>Voltar</a>";
    ?>
</div>
</body>
</html>