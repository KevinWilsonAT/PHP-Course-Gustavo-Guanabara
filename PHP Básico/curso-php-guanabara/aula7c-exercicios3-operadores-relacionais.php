<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Operadores Relacionais em PHP</title>
</head>
<body>
<div>
    <?php
        echo "Exercise 3:<br><br>";

        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $m = ($n1 + $n2) / 2;

        echo '$n1 = $_GET["n1"];<br>';
        echo '$n2 = $_GET["n2"];<br>';
        echo '$m = ($n1 + $n2) / 2;<br><br>';

        echo 'echo "The average between $n1 and $n2 is $m.";<br>';
        echo "The average between $n1 and $n2 is $m.<br><br>";

        $sit = ($m < 6) ? "REPROVED" : "APPROVED";
        echo '$sit = ($m < 6) ? "REPROVED" : "APPROVED";<br><br>';

        echo 'echo "The Student situation is $sit";<br>';
        echo "The Student situation is $sit";
    ?>
</div>
</body>
</html>