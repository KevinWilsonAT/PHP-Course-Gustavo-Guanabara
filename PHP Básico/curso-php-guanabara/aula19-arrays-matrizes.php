<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays e matrizes em PHP (Parte 2)</title>
</head>
<body>
<div>
    <?php
        echo "<h2>Arrays and Matrices (Part 2)</h2>";

        echo "<h3>Arrays and Matrices Functions:</h3>";

        echo "<h4>1 - print_r( ) Function</h4>";

        echo '$n = array(3,5,8,2)<br>';
        echo 'print_r($n);<br>';

        echo "<h4>2 - var_dump( ) Function</h4>";

        echo '$n = array(3,5,8,2)<br>';
        echo 'var_dump($n);<br>';

        echo "<h4>3 - count( ) Function</h4>";

        echo '$n = array(3,5,8,2)<br>';
        echo 'count($n); - // Display how may elements exists inside the array<br>';

        echo "<h4>4 - Manage last elements of an array - array_push( ) and array_pop( ) Function</h4>";

        echo '$n = array(3,5,8,2)<br>';
        echo 'array_push($n,7); - // This will insert the value 7 as an element after the last value of the array<br><br>';

        echo '$n = array(3,5,8,2,7)<br>';
        echo 'array_pop($n); - // This will delete the last value of the array<br>';

        echo "<h4>5 - Manage first elements of an array - array_unshift( ) and array_shift( ) Function</h4>";

        echo '$n = array(3,5,8,2)<br>';
        echo 'array_unshift($n,7); - // This will insert the value 7 as an element before the first value of the array<br><br>';

        echo '$n = array(7,3,5,8,2)<br>';
        echo 'array_shift($n); - // This will delete the first value of the array<br>';

        echo "<h4>6 - Order elements of an array by values - sort( ) Function</h4>";

        echo '$n = array(3,5,8,2)<br>';
        echo 'sort($n); - // This will order the values of the array<br><br>';

        echo "<h4>7 - Order reversely elements of an array by values - rsort( ) Function</h4>";

        echo '$n = array(3,5,8,2)<br>';
        echo 'rsort($n); - // This will order reversely the values of the array<br><br>';

        echo "<h4>8 - Order elements and indexes of an array - asort( ) Function</h4>";

        echo '$n = array(3,5,8,2)<br>';
        echo 'asort($n); - // This will order the values and indexes of the array<br><br>';

        echo "<h4>9 - Order reversely elements and indexes of an array - arsort( ) Function</h4>";

        echo '$n = array(3,5,8,2)<br>';
        echo 'arsort($n); - // This will order reversely the values and indexes of the array<br><br>';

        echo "<h4>10 - Order elements of an array by keys - ksort( ) Function</h4>";

        echo '$n = array(3,5,8,2)<br>';
        echo 'ksort($n); - // This will order the values of the array by the keys<br><br>';

        echo "<h4>11 - Order reversely elements of an array by keys - krsort( ) Function</h4>";

        echo '$n = array(3,5,8,2)<br>';
        echo 'krsort($n); - // This will order reversely the values of the array by the key<br><br>';
     ?>
</div>
</body>
</html>