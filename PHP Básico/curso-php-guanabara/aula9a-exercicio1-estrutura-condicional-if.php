<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Condicional If - Exercício 1 (Parte PHP)</title>
</head>
<body>
<div>
    <?php
        $year = $_GET["b_year"];
        $age = date("Y") - $year;

        if($age >= 18){
            echo "You have $age years old and you can drive and can vote.";
        }
        else {
            echo "You have $age years old and you can't drive and can't vote.";
        }

        echo "<br><br><a href='aula9a-exercicio1-estrutura-condicional-if.html'>Voltar</a>";
    ?>
</div>
</body>
</html>