<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais em PHP</title>
</head>
<body>
<div>
    <?php
        echo "<h2>Relational Operators</h2><br>";

        echo 'Greater: $a > $b<br>';
        echo 'Lesser: $a < $b<br>';
        echo 'Greater or equal: $a >= $b<br>';
        echo 'Lesser or equal: $a <= $b<br>';
        echo 'Different: $a <> $b; $a !=$b<br>';
        echo 'Equal: $a == $b<br>';
        echo 'Identical: $a === $b<br><br>';

        echo "<h2>Ternary Operator</h2><br>";

        echo '[expression of comparison] ? [the result, in case of true in the comparison] :[the result, in case of
                false in the comparison]<br>';
    ?>
</div>
</body>
</html>