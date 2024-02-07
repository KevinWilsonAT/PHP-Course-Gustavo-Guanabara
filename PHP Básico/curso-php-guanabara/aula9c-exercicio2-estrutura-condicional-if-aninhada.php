<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Condicional If Aninhada - Exercício 2 (Parte PHP)</title>
</head>
<body>
<div>
    <?php
        $year = $_GET["b_year"];
        $age = date("Y") - $year;

        if($age < 16){
            $vote = "none. You can't vote.";
        }
        elseif(($age >= 16 && $age < 18) || ($age > 65)){
            $vote = "optional";
        }
        else {
            $vote = "obligatory";
        }

        echo "You have $age and your vote is $vote.";
        echo "<br><br><a href='aula9c-exercicio2-estrutura-condicional-if-aninhada.html'>Voltar</a>";
    ?>
</div>
</body>
</html>