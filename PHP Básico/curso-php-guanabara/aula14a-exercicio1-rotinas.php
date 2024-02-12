<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas - Exercício 1 (Parte PHP)</title>
</head>
<body>
    <div>
        <?php
            function sum($a, $b){
                $s = $a + $b;
                echo "The addition between $a and $b is $s<br>";
                }

            sum(3, 4);
            sum(8, 2);
            $x = 9;
            $y = 15;
            sum($x, $y);
        ?>
    </div>
</body>
</html>