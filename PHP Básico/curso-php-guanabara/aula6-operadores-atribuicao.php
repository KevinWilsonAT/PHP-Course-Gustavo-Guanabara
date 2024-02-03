<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Atribuição PHP</title>
</head>
<body>
<div>
    <?php
        // attribution operator where a number value is the sum between itself and another number

        echo "Simple Value Attribution<br><br>";
        $a = 1;
        echo '$a = 1;'."<br>";
        $b = 3;
        echo '$b = 3;'."<br><br>";

        echo "Simple Sum Attribution<br><br>";

        $c = $a + $b;
        echo'$c = $a + $b;'."<br><br>";

        echo "Sum Attribution using Attribution Operators<br><br>";

        $c = $c + 5;
        $c += 5;
        echo '$c = $c + 5;'."<br>".'$c += 5;'."<br><br>";

        $a = $a + 1;
        $a += 1;
        $a++;
        echo '$a = $a + 1;'."<br>".'$a += 1;'."<br>".'$a++;';

        echo "<br><h2>Attribution Operators List</h2><br>";

        echo 'Addition:<br>';
        echo '$a = $a + $b;<br>';
        echo '$a += $b;<br><br>';

        echo 'Subtraction:<br>';
        echo '$a = $a - $b;<br>';
        echo '$a -= $b;<br><br>';

        echo 'Multiplication:<br>';
        echo '$a = $a * $b;<br>';
        echo '$a *= $b;<br><br>';

        echo 'Division:<br>';
        echo '$a = $a / $b;<br>';
        echo '$a /= $b;<br><br>';

        echo 'Module:<br>';
        echo '$a = $a % $b;<br>';
        echo '$a %= $b;<br><br>';

        echo 'Concatenation:<br>';
        echo '$a = $a . $b;<br>';
        echo '$a .= $b;<br>';
    ?>
</div>
</body>
</html>