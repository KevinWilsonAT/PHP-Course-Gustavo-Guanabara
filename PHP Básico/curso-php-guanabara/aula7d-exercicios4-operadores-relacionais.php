<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4 - Operadores Relacionais em PHP</title>
</head>
<body>
<div>
    <?php
        $year = $_GET["y"];
        $age = 2024 - $year;
        echo '$year = $_GET["y"];<br>';
        echo '$age = 2024 - $year;<br><br>';

        echo 'echo "Those who born at $year, has the age of $age.";<br>';
        echo "Those who born at $year, has the age of $age.<br><br>";

        $type = ($age >= 18 && $age <=65) ? "OBLIGATORY" : "NOT OBLIGATORY";
        echo '$type = ($age >= 18 && $age <=65) ? "OBLIGATORY" : "NOT OBLIGATORY";<br><br>';

        echo 'echo "And that way, your vote is $type."<br>';
        echo "And that way, your vote is $type.";
    ?>
</div>
</body>
</html>