<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - Operadores Relacionais em PHP</title>
</head>
<body>
<div>
    <?php
        echo "Exercise 1:<br><br>";

        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $type = $_GET["op"];

        echo '$n1 = $_GET["a"];<br>';
        echo '$n1 = $_GET["b"];<br>';
        echo '$type = $_GET["op"];<br>';
        echo 'echo "The provided values were $n1 and $n2.";<br><br>';

        echo "The provided values were $n1 and $n2.<br><br>";

        echo '$r = ($type == "s") ? $n1 + $n2 : $n1 * $n2;<br>';
        $r = ($type == "s") ? $n1 + $n2 : $n1 * $n2;
        echo 'echo "The result will be $r";<br><br>';
        echo "The result will be $r";
    ?>
</div>
</body>
</html>