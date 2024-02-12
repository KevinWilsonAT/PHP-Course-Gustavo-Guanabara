<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parâmetros dinâmicos - Rotinas em PHP</title>
</head>
<body>
<div>
    <?php
        echo "<h2>Dynamic Parameters</h2><br>";

        echo '$res = sum(3,4,8,1,2);<br><br>';

        echo 'function sum(){<br>';
        echo '&nbsp; &nbsp; $p = func_get_args();<br>'; // Creates an array $p with the arguments 3, 4, 8, 1, 2
        echo '&nbsp; &nbsp; $tot = func_num_args();<br>'; // Returns the number of arguments received
        echo '&nbsp; &nbsp; $s = 0;<br>';
        echo '&nbsp; &nbsp; for($i = 0; $i < $tot; $i++){<br>';
        echo '&nbsp; &nbsp; &nbsp; &nbsp; $s = $s + $p[$i];<br>';
        echo '&nbsp; &nbsp; }<br>';
        echo '&nbsp; &nbsp; return $s;<br>';
        echo '}<br><br>';
    ?>
</div>
</body>
</html>