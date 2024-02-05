<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 - Operadores Relacionais em PHP</title>
</head>
<body>
<div>
    <?php
        echo "Exercise 2:<br><br>";

        $a = 3;
        $b = "3";

        echo '$a = 3;<br>';
        echo '$a = "3";<br><br>';

        $r = ($a == $b) ? "YES" : "NO";
        echo '$r = ($a == $b) ? "YES" : "NO";<br><br>';

        echo 'echo "The Variables are equal? $r";<br>';
        echo "The Variables are equal? $r<br><br>";

        $r = ($a === $b) ? "YES" : "NO";
        echo '$r = ($a === $b) ? "YES" : "NO";<br><br>';

        echo 'echo "The Variables are identical? $r";<br>';
        echo "The Variables are identical? $r";
    ?>
</div>
</body>
</html>