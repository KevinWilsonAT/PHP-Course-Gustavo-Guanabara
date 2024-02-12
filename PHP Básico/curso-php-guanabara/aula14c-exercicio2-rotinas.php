<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas - Exercício 2 (Parte PHP)</title>
</head>
<body>
    <div>
        <?php
            function sum($a, $b){
                $s = $a + $b;   // You can omit this line and put
                return $s;      // the sum right here instead of $s
            }

            $x = 9;
            $y = 15;
            $res = sum($x, $y);
            echo "The addition between $x and $y is $res<br>";
        ?>
    </div>
</body>
</html>