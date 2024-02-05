<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos PHP</title>
</head>
<body>
<div>
    <?php

        $n1 = 3;
        $n2 = 2;

        // ADDITION
        echo "The sum between $n1 and $n2 is ".($n1+$n2)."<br>";

        // SUBTRACTION
        echo "The subtraction between $n1 and $n2 is ".($n1-$n2)."<br>";

        // MULTIPLICATION
        echo "The multiplication between $n1 and $n2 is ".($n1*$n2)."<br>";

        // DIVISION
        echo "The division between $n1 and $n2 is ".($n1/$n2)."<br>";

        // MODULE
        echo "The module between $n1 and $n2 is ".($n1%$n2)."<br>";

        // AVERAGE
        $m = ($n1+$n2) / 2;
        echo "The average between $n1 and $n2 is $m.";

        // attribution of n1 and n2 through a and b at a address

        // localhost/[address and/or php file name].php?a=3&b=2

        // instead of $n1 = 3; and $n2 = 2;, the attribution will be made
        // at that way: $n1 = $_GET["a"]; and $n2 = $_GET["b"];

        // absolute values

        // localhost/[address and/or php file name].php?x=4&y=4

        $v1 = $_GET["x"];
        $v2 = $_GET["y"];

        echo "<br><h2>Received values: $v1 and $v2</h2><br>";
        echo "The absolute value of $v2 is ".abs($v2)."<br>";

        // Potentiating numbers

        echo "The value of $v1<sup>$v2</sup> is ".pow($v1,$v2)."<br>";

        // Square root

        echo "The square root of $v1 is ".sqrt($v1)."<br>";

        // rounding numbers

        echo "The rounded value of $m is ".round($m)."<br>"; // ceil = rounds up ; floor = rounds down

        // integer part of a number

        echo "The integer part of $m is ".intval($m)."<br>";

        // formatting numbers

        echo "The value of $m in currency is ". number_format($m, 2, ",", ".")."<br>";
    ?>
</div>
</body>
</html>