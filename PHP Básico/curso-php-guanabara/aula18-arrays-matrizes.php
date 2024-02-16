<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays e matrizes em PHP (Parte 1)</title>
</head>
<body>
<div>
    <?php
        echo "<h2>Arrays and Matrices (Part 1)</h2>";

         echo "<h3>Arrays:</h3>";

         echo "<h4>Method 1:</h4>";

         echo '$n[0] = 3;<br>';
         echo '$n[1] = 5;<br>';
         echo '$n[2] = 8;<br>';
         echo '$n[3] = 2;<br>';
         echo '$n[4] = 7;<br><br>';

        echo "<h4>Method 2:</h4>";

        echo '$n = array(3,5,8,2);<br><br>';

        echo "To put a value at the end of the array, use:<br><br>";
        echo '$n[] = 7;<br><br>';

        echo "<h4>Using range:</h4>";

        echo '$n = range(5,20,5); - // This will create an array from 5 (1st) to 20, with a ratio of 5 (2nd)<br><br>';

        echo "<h4>Using range with foreach:</h4>";

        echo '$n = range(5,20,5)<br>';
        echo 'foreach ($n as $v){<br>';
        echo '&nbsp; &nbsp; echo "$v ";<br>';
        echo '}<br><br>';

        echo "<h4>Making custom arrays:</h4>";

        echo '$n = array(3 => 5, 1 => 9, 0 => 8, 7 =>7);<br><br>';

        echo "To put a value at the end of the array, use:<br><br>";
        echo '$n[] = 8;<br><br>';

        echo "To remove the last value of the array, use:<br><br>";
        echo 'unset($n[index_number]);<br><br>';

        echo "<h4>Associative Keys:</h4>";

        echo '$cad = array("name" => "Ana", "age" => 23, "weight" => 78.5);<br><br>';

        echo "<h4>Using Associative Keys wit foreach:</h4>";

        echo '$cad = array("name" => "Ana", "age" => 23, "weight" => 78.5);<br>';
        echo 'foreach ($cad as $f => $c){<br>';
        echo '&nbsp; &nbsp; echo "Field: $f, Content: $c ";<br>';
        echo '}';

        echo "<h3>Matrices:</h3>";

        echo '$n = array(array(2,3), array(3,4), array(9,5));';

        echo "<h4>Attributing values:</h4>";

        echo '$n[2][0] = $n[1][1]; - // The field of $n[2][0] (which contains the number 9) will receive the content of the field $n[1][1] (which is the number 4);';
     ?>
</div>
</body>
</html>